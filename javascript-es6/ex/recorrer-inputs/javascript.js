const calculate = () => {
    let sum = 0;
    document.querySelectorAll('.n').forEach((input) => {
        sum += Number(input.value);
        document.querySelector('p').innerHTML = sum;
    });
};

document.querySelector('button').addEventListener('click', calculate);