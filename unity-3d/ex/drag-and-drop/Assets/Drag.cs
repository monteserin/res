using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Drag : MonoBehaviour
{
    private bool enDrag;
    GameManager gC;

    void Start()
    {
        //accedemos al script
        gC = GameObject.Find("GameManager").GetComponent<GameManager>();
    }

    void Update()
    {
        if (enDrag)
        {
            Vector3 posRaton = Input.mousePosition;
            posRaton.z = -Camera.main.transform.position.z;
            transform.position = (Vector2)Camera.main.ScreenToWorldPoint(posRaton);
        }
        if (Input.GetMouseButtonUp(0) && enDrag)
        {
            enDrag = false;
            gC.ComprobarDrop();

        }
    }

    void OnMouseDown()
    {
        enDrag = true;
        gC.objetoSeleccionado = this.transform;
    }
}
