<script setup>
import {Link} from '@inertiajs/vue3';
import {ref} from "vue";

const isSubmenuOpen = ref(false);
const toggleSubmenu = () => {
    isSubmenuOpen.value = !isSubmenuOpen.value;
};
</script>

<template>
    <div>
        <div class="flex h-full">
            <aside class="bg-gray-900 text-white w-64 p-4">
                <ul class="space-y-2">
                    <li>
                        <Link :href="'/admin/main_page/1/edit'"
                              class="block px-4 py-2 rounded hover:bg-gray-700">
                            <!--                  :class="route().current('main_page.*')?'menu-label-active':''"-->
                            Головна сторінка
                        </Link>
                    </li>
                    <li>
                        <Link :href="'/admin/params'"
                              class="block px-4 py-2 rounded hover:bg-gray-700">
                            <!--                  :class="route().current('main_page.*')?'menu-label-active':''"-->
                            Параметри
                        </Link>
                    </li>
                    <li>
                        <Link :href="'/admin/about_us/1/edit'"
                              class="block px-4 py-2 rounded hover:bg-gray-700">
                            <!--                  :class="route().current('main_page.*')?'menu-label-active':''"-->
                            Про нас
                        </Link>
                    </li>
                    <li>
                        <!--            <Link :class="route().current('blogs.*')?'menu-label-active':''" :href="route('blogs.index')"-->
                        <!--                  class="block px-4 py-2 rounded hover:bg-gray-700">-->
                        <!--              Блоги-->
                        <!--            </Link>-->
                    </li>
                    <li>
                        <!--            <Link :class="route().current('blog-comments.*')?'menu-label-active':''"-->
                        <!--                  :href="route('blog-comments.index')" class="block px-4 py-2 rounded hover:bg-gray-700">-->
                        <!--              Коментарі блогу-->
                        <!--            </Link>-->
                    </li>
                    <li>
                        <!--            <Link-->
                        <!--                :class="route().current('faqs.*')?'menu-label-active':''"-->
                        <!--                :href="route('faqs.index')"-->
                        <!--                class="block px-4 py-2 rounded hover:bg-gray-700"-->
                        <!--            >-->
                        <!--              Faqs-->
                        <!--            </Link>-->
                    </li>
                    <li>
                        <!--            <Link-->
                        <!--                :class="route().current('countries.*')?'menu-label-active':''"-->
                        <!--                :href="route('countries.index')"-->
                        <!--                class="block px-4 py-2 rounded hover:bg-gray-700"-->
                        <!--            >-->
                        <!--              Країни-->
                        <!--            </Link>-->
                    </li>
                    <li>
                        <!--            <Link :href="route('excursions.index')" class="block px-4 py-2 rounded hover:bg-gray-700"-->
                        <!--                  :class="route().current('excursions.*')?'menu-label-active':''">-->
                        <!--              Екскурсії-->
                        <!--            </Link>-->
                    </li>
                    <li>
                        <!--            <Link :href="route('regions.index')" class="block px-4 py-2 rounded hover:bg-gray-700"-->
                        <!--                  :class="route().current('regions.*')?'menu-label-active':''">-->
                        <!--              Регіони-->
                        <!--            </Link>-->
                    </li>
                    <li>
                        <!--            <Link :href="route('resorts.index')" class="block px-4 py-2 rounded hover:bg-gray-700"-->
                        <!--                  :class="route().current('resorts.*')?'menu-label-active':''">-->
                        <!--              Курорти-->
                        <!--            </Link>-->
                    </li>
                    <!--          <li>-->
                    <!--            <div class="flex items-center justify-between px-4 py-2 rounded hover:bg-gray-700 cursor-pointer">-->
                    <!--&lt;!&ndash;                 :class="route().current('hotels.*')?'menu-label-active':''">&ndash;&gt;-->
                    <!--&lt;!&ndash;              <Link :href="route('hotels.index')" class="block" style="width:80%">&ndash;&gt;-->
                    <!--&lt;!&ndash;                Готелі&ndash;&gt;-->
                    <!--&lt;!&ndash;              </Link>&ndash;&gt;-->
                    <!--              <button @click="toggleSubmenu" class="text-gray-400 hover:text-white" style="width:20%">-->
                    <!--                <i :class="isSubmenuOpen ? 'fa fa-chevron-up' : 'fa fa-chevron-down'"></i>-->
                    <!--              </button>-->
                    <!--            </div>-->
                    <!--            <ul v-if="isSubmenuOpen" class="pl-4">-->
                    <!--              <li>-->
                    <!--&lt;!&ndash;                <Link :class="route().current('restaurants.*')?'menu-label-active':''"&ndash;&gt;-->
                    <!--&lt;!&ndash;                      :href="route('restaurants.index')" class="block px-4 py-2 rounded hover:bg-gray-700">&ndash;&gt;-->
                    <!--&lt;!&ndash;                  Ресторани&ndash;&gt;-->
                    <!--&lt;!&ndash;                </Link>&ndash;&gt;-->
                    <!--              </li>-->
                    <!--              <li>-->
                    <!--&lt;!&ndash;                <Link :class="route().current('rooms.*')?'menu-label-active':''" :href="route('rooms.index')"&ndash;&gt;-->
                    <!--&lt;!&ndash;                      class="block px-4 py-2 rounded hover:bg-gray-700">&ndash;&gt;-->
                    <!--&lt;!&ndash;                  Кімнати&ndash;&gt;-->
                    <!--&lt;!&ndash;                </Link>&ndash;&gt;-->
                    <!--              </li>-->
                    <!--              <li>-->
                    <!--&lt;!&ndash;                <Link :class="route().current('beaches.*')?'menu-label-active':''" :href="route('beaches.index')"&ndash;&gt;-->
                    <!--&lt;!&ndash;                      class="block px-4 py-2 rounded hover:bg-gray-700">&ndash;&gt;-->
                    <!--&lt;!&ndash;                  Пляжі&ndash;&gt;-->
                    <!--&lt;!&ndash;                </Link>&ndash;&gt;-->
                    <!--              </li>-->
                    <!--            </ul>-->
                    <!--          </li>-->
                </ul>
            </aside>
            <main class="p-4 flex-1 bg-gray-100">
                <slot/>
            </main>
        </div>

    </div>
</template>

<style scoped>
.menu-label-active {
    background-color: #9ca3af;
}
</style>
