using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameManager : MonoBehaviour
{
    [HideInInspector] public Transform objetoSeleccionado;
    public List<Transform> objetosDestino;

    public void ComprobarDrop()
    {
        for (int i = 0; i < objetosDestino.Count; i++)
        {
            if (Vector3.Distance(objetoSeleccionado.position, objetosDestino[i].position) < 1)
            {
                Debug.Log("Objeto soltado");
            }
        }
    }
}
