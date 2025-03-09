const calculateTriangleArea = (base, height) => {
    const r = base * height / 2;
    return r;
}

const triangleArea = calculateTriangleArea(2, 3);
console.log(triangleArea);