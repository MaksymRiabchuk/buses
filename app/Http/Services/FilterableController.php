<?php

namespace App\Http\Services;

trait FilterableController
{
    public static function prepareFilterQuery($request, $model, $filters): object
    {
        if (!empty($filters)) {
            $_tempFilters = [];
            $only = [];
            foreach ($filters as $filter) {
                $_tempFilters[$filter['name']] = $filter;
                $only[] = $filter['name'];
            }

            $filterValues = $request->only($only);

            $query = $model::query();

            foreach ($_tempFilters as $key => $filter) {
                if (empty($filterValues[$key])) {
                    continue;
                }

                if (isset($filter['relation']) && $filter['relation']) {
                    $relation = $filter['relation'];
                    $relationField = $filter['relationField'] ?? $key;
                    $query->whereHas($relation, function ($q) use ($relationField, $filter, $filterValues, $key) {
                        if (isset($filter['searchType']) && $filter['searchType'] == 'like') {
                            $q->where("categories.$relationField", 'like', '%' . $filterValues[$key] . '%');
                        } else {
                            $q->where("categories.$relationField", '=', $filterValues[$key]);
                        }
                    });
                } else {
                    if (isset($filter['searchType']) && ($filter['searchType'] == 'like' || $filter['searchType'] == '%')) {
                        $query->where($key, 'like', '%' . $filterValues[$key] . '%');
                    }
                    else if(isset($filter['searchType']) && $filter['searchType']=='in_relation'){
                        $values=$filter['relationalModel']::where($key,$filterValues[$key])->get()->pluck('tour_id')->toArray();
                        $query->whereIn('id', $values)->get();
                    } else if(isset($filter['searchType']) && $filter['searchType']=='>='){
                        $query->where($key, '>=', $filterValues[$key]);
                    }
                    else if(isset($filter['searchType']) && $filter['searchType']=='<='){
                        $query->where($key, '<=', $filterValues[$key]);
                    }
                    else {
                        $query->where($key, '=', $filterValues[$key]);
                    }
                }
            }
            return $query;
        } else {
            return $model::query();
        }
    }
}
