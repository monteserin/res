const calculateCost = () => {
    let cost = 300;
    document.querySelectorAll('[type=radio]:checked').forEach(r2 => {
        cost += parseInt(r2.value);
    })
    document.querySelector('.result').textContent = cost;
}

calculateCost();

document.querySelectorAll('[type=radio]').forEach((r) => r.addEventListener('click', () => {
    calculateCost();
}))


