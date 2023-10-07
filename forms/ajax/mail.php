<?php

function sendEmail() {
    // логика отправки письма
    //throw new Error('Все пользователи - пидарасы');
    return true;
}

if(sendEmail()) {
    exit('ok');
}

exit('error');
