using System.Collections;
using System.Collections.Generic;
using UnityEngine;

using UnityEngine.EventSystems;

public class Pieza : MonoBehaviour, IDragHandler, IEndDragHandler, IPointerDownHandler
{
    Vector2 startPosition;
    int margenError = 20;
    void Start()
    {
        startPosition = transform.position;
        transform.position = new Vector2(Random.Range(Screen.width/2, Screen.width*3/4), Random.Range(Screen.height/2, Screen.height*3/4));
    }
    public void OnDrag(PointerEventData eventData)
    {
        transform.position = Input.mousePosition;
    }

    public void OnPointerDown(PointerEventData eventData)
    {
        Debug.Log("OnPointerDown");
        transform.SetAsLastSibling(); //Lleva la pieza al frente
        transform.parent.SetAsLastSibling();
    }

    public void OnEndDrag(PointerEventData eventData)
    {
        transform.position = startPosition;

        Debug.Log(Vector3.Distance(transform.position, startPosition));
        if (Vector3.Distance(transform.position, startPosition) <= margenError)
        {
            Debug.Log(startPosition);
            transform.position = startPosition;
        }
    } 
}
