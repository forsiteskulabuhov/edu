<?php

function sendEmail() {
    // логика отправки письма
    //throw new Error('Все пользователи - пидарасы');
    return true;
}

if(sendEmail()) {
    header('location: success.html');
} else {
    header('location: error.html');
}
