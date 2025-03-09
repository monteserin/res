using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class CoProta : MonoBehaviour {

    private Transform destino;
    private Player playerCodigo;
    void Start () {
        GameObject player = GameObject.Find("Player");
        playerCodigo = player.GetComponent<Player>();
        destino = player.transform.Find("DestinoCoprota");
	}
	
    void Update()
    {
        //Cambiar destino del coprota dependiendo de tu direccion
        destino.localPosition = new Vector3(Mathf.Abs(destino.localPosition.x) * playerCodigo.facing * -1, destino.localPosition.y, destino.localPosition.z);

    }

    void FixedUpdate()
    {
        //El tercer parámetro del Lerp indica el porcentaje de la ruta que hace en cadda frame
        transform.position = Vector2.Lerp(transform.position, destino.position, 0.1f);
    }
}
