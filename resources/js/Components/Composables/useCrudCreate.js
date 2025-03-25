import {computed, ref} from 'vue';
import {useToast} from "vue-toastification";


export function useCrudCreate(form, props, itemName) {
    const title = computed(() => {
        return props.isUpdating ? 'Updating' : 'Creating';
    });

    const submit = () => {
        if (props.isUpdating && props.item) {
            update();
        } else {
            add();
        }
    };

    const save = () => {
        if (props.isUpdating && props.item) {
            updateAndStay();
        } else {
            add();
        }
    };

    const add = () => {
        form.post(`/admin/${itemName}`);
    }
    const update = () => {
        if (props.item) {
            form.put(`/admin/${itemName}/${props.item.id}`);
        }
    };

    const toast = useToast();
    const isSubmitting = ref(false);

    const  updateAndStay = async () => {
        if (isSubmitting.value) {
            return; // Если запрос уже выполняется, не отправляем новый
        }
         const formElement = document.querySelector('form'); // Указываем форму, которую нужно валидировать

         if (formElement && !formElement.checkValidity()) {
             // Если форма не проходит валидацию, показываем ошибку
             formElement.reportValidity(); // Показать стандартные сообщения об ошибках для каждого неверного поля
             toast.error('Please fill in all required fields correctly.');
             return;
         }

        if (props.item) {
            try {
                isSubmitting.value = true;
                const response = await axios.put(`/admin/${itemName}/${props.item.id}`, {
                    ...form.data(),
                    stay: true,
                }, {
                    headers: {
                        'Content-Type': 'application/json',
                    }
                });

                // Выводим тост с успешным сообщением
                toast.success(response.data.message);
            } catch (error) {
                if (error.response && error.response.data.errors) {
                    // Если есть ошибки валидации, выводим их через тост
                    Object.values(error.response.data.errors).forEach(err => {
                        toast.error(err[0]);
                    });
                } else {
                    // Общая ошибка
                    toast.error('An error occurred while updating.');
                }
            } finally {
                isSubmitting.value = false; // Снимаем блокировку после завершения запроса
            }
        }
    };


    return {
        title,
        submit,
        save,
        add,
        update,
    };
}
