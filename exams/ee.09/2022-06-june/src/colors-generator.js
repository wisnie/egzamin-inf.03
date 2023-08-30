const input = document.querySelector('input');
const button = document.querySelector('button');

// Metoda `getElementsByTagName` zwraca typ danych `HTMLCollection`, który w przeciwieństwie
// do metody `querySelectorAll` zwracającej NodeList, jest interaktywny.
const dataCells = document.getElementsByTagName('td');

const TD_INDEX_TO_SATURATION_VALUE = {
    0: '100%',
    1: '80%',
    2: '60%',
    3: '40%',
    4: '20%'
}

const handleClick = () => {
    // HTMlCollection nie posiada metody `forEach`, dlatego konwertujemy na `Array`.
    [...dataCells].forEach((element, index) => element.style.backgroundColor = `hsl(${input.value} ${TD_INDEX_TO_SATURATION_VALUE[index]} 50%)`)
};

button.addEventListener('click', handleClick);