using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;


public class GameManager : MonoBehaviour
{

  float distanciaRayo;
  GameObject pieza;
  bool estaPulsado;
  int ultimaFichaOrden;
  bool permitirJugar = false;

  public List<GameObject> fichasMoviles;
  public List<GameObject> fichasSolucion;
  public GameObject n_piezas;

  private int contadorSolucionesCorrectas;

  // Update is called once per frame
  void Update()
  {
    if (Input.GetMouseButtonDown(0) && permitirJugar)
    {
      SeleccionarPieza();
    }

    if (Input.GetMouseButtonUp(0))
    {
      SoltarPieza();
    }

    if (estaPulsado)
    {
      MoverPieza();
    }
  }


  void SeleccionarPieza()
  {
    //Si estamos trabajando con Colliders 2D
    RaycastHit2D hit = Physics2D.Raycast(Camera.main.ScreenToWorldPoint(Input.mousePosition), Vector2.zero);
    if (hit)
      if (hit.collider.gameObject.tag == "piezapuzzle")
      {
        ultimaFichaOrden++;
        estaPulsado = true;
        distanciaRayo = hit.distance; //distanciaRayo será un valor que utilizaremos más adelante
        pieza = hit.collider.gameObject;

        pieza.GetComponent<SpriteRenderer>().sortingOrder = ultimaFichaOrden;
        Debug.Log(pieza);
      }
  }

  void MoverPieza()
  {
    Ray rayo = Camera.main.ScreenPointToRay(Input.mousePosition);
    Vector3 limiteRayo = rayo.GetPoint(distanciaRayo);
    limiteRayo = new Vector3(limiteRayo.x, limiteRayo.y, 0);
    pieza.transform.position = limiteRayo;
  }

  void SoltarPieza()
  {
    if (estaPulsado)
    {
      ComprobarDrop();
      estaPulsado = false;
      pieza = null;
    }
  }


  public void ComprobarDrop()
  {
    for (int i = 0; i < fichasSolucion.Count; i++)
    {
      if (pieza.name == fichasSolucion[i].name)
      {
        if (Vector2.Distance(pieza.transform.position, fichasSolucion[i].transform.position) < 1)
        {
          pieza.transform.position = fichasSolucion[i].transform.position;

          contadorSolucionesCorrectas++;
          if (contadorSolucionesCorrectas == fichasMoviles.Count)
          {
            Debug.Log("Ganaste");
          }
          pieza.GetComponent<BoxCollider2D>().enabled = false;
          n_piezas.GetComponent<TextMeshPro>().text = "" + (int.Parse(n_piezas.GetComponent<TextMeshPro>().text)  + 1);
          break;
        }
      }
    }
  }

  void Desordenar()
  {
    for (int i = 0; i < fichasMoviles.Count; i++)
    {
      fichasMoviles[i].transform.position = new Vector3(Random.Range(-5, 5), Random.Range(-2, 2), 0);
    }
    permitirJugar = true;
  }

  void Start()
  {
    Invoke("Desordenar", 2.0f);
  }
}

