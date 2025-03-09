using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Player : MonoBehaviour
{
    private float verInput;
    private float horInput;

    Rigidbody rb;
    int walkspeed = 3;
    private Vector3 movement;

    void Start()
    {
        rb = GetComponent<Rigidbody>();
    }

    void FixedUpdate()
    {
        this.verInput = Input.GetAxis("Vertical");


        this.horInput = Input.GetAxis("Horizontal");
        //Giramos el objeto
        transform.Rotate(0, horInput* 90 * Time.deltaTime*3 ,0 );
        
        // InverseTransformDirection convierde las características del objeto en el mundo a características locales del objeto
        this.movement = transform.InverseTransformDirection(GetComponent<Rigidbody>().velocity);
        // Utilizaremos estos datos locales del objeto para los cálculos

           this.movement.z = verInput * walkspeed;
        //Finalmente, volvemos a convertir los datos locales del objeto a datos globales para establecer la nueva posición

         this.rb.velocity = transform.TransformDirection(this.movement);


        GetComponent<Rigidbody>().velocity = transform.TransformDirection(this.movement);
    }
}
