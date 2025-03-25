import { ref, computed, watch, onMounted } from 'vue';
import { useForm, usePage } from '@inertiajs/vue3';
import { useToast } from 'vue-toastification';

export function useCrudIndex(itemName = '') {
    const form = useForm({});
    const toast = useToast();
    const page = usePage();
    const showMessage = ref(false);

    const deleteItem = (id) => {
        if (window.confirm('Ви дійсно хочете видалити цей елемент?')) {
            form.delete(`${itemName}/${id}`, {});
        }
    };

    const successMessage = computed(() => {
        return page.props.flash ? page.props.flash.success : null;
    });
    const dangerMessage = computed(() => {
        return page.props.flash ? page.props.flash.danger : null;
    });

    // Show toast on page load if there's a success message
    onMounted(() => {
        if (successMessage.value) {
            toast.success(successMessage.value);
            showMessage.value = true;
            setTimeout(() => {
                showMessage.value = false;
            }, 3000);
        }
        if (dangerMessage.value) {
            toast.error(dangerMessage.value);
            showMessage.value = true;
            setTimeout(() => {
                showMessage.value = false;
            }, 3000);
        }
    });

    // Watch for changes in flash messages and show toast if success
    watch(
        () => page.props.flash,
        (newVal) => {
            if (newVal && newVal.success) {
                showMessage.value = true;
                toast.success(newVal.success);
                setTimeout(() => {
                    showMessage.value = false;
                }, 3000);
            }
            if (newVal && newVal.danger) {
                showMessage.value = true;
                toast.error(newVal.danger);
                setTimeout(() => {
                    showMessage.value = false;
                }, 3000);
            }
        },
        { deep: true }
    );

    return {
        deleteItem
    };
}
