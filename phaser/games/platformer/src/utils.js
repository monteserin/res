export const insertBadGuys = (scene, arrayDeMalos, type) => {
  const enemies = scene.physics.add.group({
    classType: type,
    runChildUpdate: true,
    runChildCreate: true,
    gravityY: 100,
  }); // Cuando instanciamos un grupo, los parámetros de gravedad los ponemos en la creación del grupo en lugar de en el personaje individual
  for (let i = 0; i < arrayDeMalos.length; i++) {
    const malo = new type(scene, arrayDeMalos[i].x, arrayDeMalos[i].y);
    enemies.add(malo);
  }
  return enemies;
};

export const findObjectsByClassInObjectsLayer = (classParam, tilemap) => {
  const result = [];
  tilemap.objects.forEach(function (element) {
    if (element.name === "objectsLayer") {
      element.objects.forEach(function (element2) {
        if (element2.type === classParam) {
          element2.y -= tilemap.tileHeight;
          result.push(element2);
        }
      });
    }
  });
  return result;
};
