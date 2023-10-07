<?php

function auth() {
    // логика авторизации
    //throw new Error('Все пользователи - пидарасы');
    return true;
}

if(auth()) {
    exit('ok');
}

exit('error');
