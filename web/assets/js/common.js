let nextStep = document.getElementById('nextStep'),
    prevStep = document.getElementById('prevStep'),
    firstStepLink = document.getElementById('firstStepLink'),
    secondStepLink = document.getElementById('secondStepLink'),
    thirdStepLink = document.getElementById('thirdStepLink'),
    activeLink,
    links = [
        {id: 1, value: firstStepLink},
        {id: 2, value: secondStepLink},
        {id: 3, value: thirdStepLink}
    ],
    steps = {
        'stepOne': 'Шаг 1: Ваша корзина',
        'stepTwo': 'Шаг 2: Доставка и выбор оплаты',
        'stepThree': 'Шаг 3: Дополнительная информация'
    }
;

let modalHeader = document.getElementById('cartModalHeader');
let stepInfoElement = document.createElement('h6');
stepInfoElement.className = 'step-info';
replaceStepInfo('stepOne');

document.body.onload = () => {

    // Preloader showing
    let preloader = document.getElementById('site-preloader');
    if (!preloader.classList.contains('done')) {
        preloader.classList.add('done');
    }
    // Cart steps working
    for (let i = 0; i < links.length; i++) {
        if (links[i]['value'].classList.contains('active')) {
            activeLink = links[i];
        }
    }

    prevStep.onclick = () => {
        switch (activeLink.id) {
            case 3:
                secondStepLink.click();
                activeLink = links.find(l => l.id === 2);
                replaceStepInfo('stepTwo');
                nextStep.innerText = 'Дальше';
                break;
            case 2:
                firstStepLink.click();
                activeLink = links.find(l => l.id === 1);
                replaceStepInfo('stepOne');
                nextStep.innerText = 'Дальше';
                break;
        }
    };

    nextStep.onclick = () => {
        switch (activeLink.id) {
            case 3:
                console.log('Вы успешно оформили заказ');
                // Order logic
                break;
            case 2:
                thirdStepLink.parentElement.classList.remove('disabled');
                thirdStepLink.click();
                activeLink = links.find(l => l.id === 3);
                replaceStepInfo('stepThree');
                nextStep.innerText = 'Завершить';
                //Some logic for nextStep button (replacing name)
                break;
            case 1:
                secondStepLink.parentElement.classList.remove('disabled');
                secondStepLink.click();
                activeLink = links.find(l => l.id === 2);
                prevStep.parentElement.classList.remove('hide');
                replaceStepInfo('stepTwo');
                break;
        }
    };

};

function tabSelected(tabName) {
    switch (tabName) {
        case 'first':
            links.find(l => l.value.classList.contains('active')).value.classList.remove('active');
            firstStepLink.classList.add('active');
            activeLink = links.find(l => l.id === 1);
            prevStep.parentElement.classList.add('hide');
            replaceStepInfo('stepOne');
            nextStep.innerText = 'Дальше';
            break;
        case 'second':
            firstStepLink.classList.remove('active');
            secondStepLink.classList.add('active');
            activeLink = links.find(l => l.id === 2);
            prevStep.parentElement.classList.remove('hide');
            replaceStepInfo('stepTwo');
            nextStep.innerText = 'Дальше';
            break;
        case 'third':
            secondStepLink.classList.remove('active');
            thirdStepLink.classList.add('active');
            activeLink = links.find(l => l.id === 3);
            prevStep.parentElement.classList.remove('hide');
            replaceStepInfo('stepThree');
            nextStep.innerText = 'Завершить';
            break;
    }
}

function replaceStepInfo(stepName) {
    stepInfoElement.innerHTML = steps[stepName];
    modalHeader.append(stepInfoElement);
}
