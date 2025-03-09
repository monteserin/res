export const generateCoordinates = (
  x,
  y,
  minDistance,
  maxDistance,
  separation,
  quantity
) => {
  let coordinates = [];
  for (let i = 0; i < quantity; ) {
    let angle = Math.random() * Math.PI * 2;
    let distance = Math.random() * (maxDistance - minDistance) + minDistance;
    let newX = x + distance * Math.cos(angle);
    let newY = y + distance * Math.sin(angle);

    if (
      coordinates.every(
        (coord) => Math.hypot(coord.x - newX, coord.y - newY) >= separation
      )
    ) {
      coordinates.push({ x: newX, y: newY });
      i++;
    }
  }
  return coordinates;
};
