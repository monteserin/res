function findObjectsByType(type, tilemap, layer) {
    const result = [];

    tilemap.objects.forEach(function (element) {
        if (element.name === 'objectsLayer') {
            element.objects.forEach(function (element2) {
                if (element2.type === type) {
                    element2.y -= tilemap.tileHeight;
                    result.push(element2);
                }
            });
        }
    });
    return result;
}

function desplazarObjeto(obj, distancia) {
    if (typeof obj.configuracionInicial == 'undefined') {
        const x = obj.x;
        const y = obj.y;

        const x2 =  typeof distancia.x == 'undefined'? x:distancia.x;
        const y2 = typeof distancia.y == 'undefined'? y:distancia.y;
        obj.pathIndex = 0;
        obj.pathVector = new Phaser.Math.Vector2();

        const path = new Phaser.Curves.Line([0, 0, 0, 0]);
        path.p0.set(x, y);
        path.p1.set(x2, y2);
        obj.path = path;
        obj.configuracionInicial = true;
    }
    if (obj.pathIndex <= 1) {
        obj.pathIndex += 0.01 ;
        obj.path.getPoint(obj.pathIndex, obj.pathVector);
        obj.setPosition(obj.pathVector.x, obj.pathVector.y);
        return false;
    }
    return true;
}