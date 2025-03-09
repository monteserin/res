import Building from "./objects/Building";

export const insertBuildings = (scene, buildingArr) => {
  const buildings = scene.physics.add.staticGroup({
    classType: Building,
    runChildUpdate: true,
    runChildCreate: true,
    allowGravity: false

  }); // Cuando instanciamos un grupo, los parámetros de gravedad los ponemos en la creación del grupo en lugar de en el personaje individual
  for (let i = 0; i < buildingArr.length; i++) {
    const building = new Building(scene, buildingArr[i]);
    buildings.add(building);
  }
  return buildings;
};
