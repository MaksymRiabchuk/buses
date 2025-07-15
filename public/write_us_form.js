document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form[name='form_write_us']");

    form.addEventListener("submit", function (event) {
        let isValid = true;
        let errorMessages = {
            name: "Це поле обовʼязкове",
            email: "Введіть коректний email або заповніть номер телефону",
            phone: "Номер телефону має бути у форматі +380XXXXXXXXX",
            message: "Це поле обовʼязкове"
        };

        // Отримуємо поля
        let name = form.querySelector("input[name='name']");
        let email = form.querySelector("input[name='email']");
        let phone = form.querySelector("input[name='phone']");
        let message = form.querySelector("textarea[name='message']");

        // Видаляємо попередні повідомлення про помилки
        form.querySelectorAll(".error-message").forEach(el => el.remove());

        // Функція для створення і вставки повідомлення про помилку
        function showError(field, message) {
            let errorSpan = document.createElement("span");
            errorSpan.classList.add("error-message");
            errorSpan.style.color = "red";
            errorSpan.innerText = message;
            field.insertAdjacentElement("afterend", errorSpan);
            isValid = false;
        }

        // Валідація полів
        if (!name.value.trim()) {
            showError(name, errorMessages.name);
        }

        if (!message.value.trim()) {
            showError(message, errorMessages.message);
        }

        if (!email.value.trim() && !phone.value.trim()) {
            showError(email, errorMessages.email);
            showError(phone, errorMessages.email);
        }

        if (phone.value.trim() && !/^\+380\d{9}$/.test(phone.value)) {
            showError(phone, errorMessages.phone);
        }

        if (!isValid) {
            event.preventDefault(); // Блокуємо відправку форми, якщо є помилки
        }
    });
});
