using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;


public class GameManager : MonoBehaviour
{
	private GameObject pieza;
	private float distanciaRayo;
	private bool _estaPulsado = false;
	private float zInicial;

	private bool [] _sceneNumbers ;
	public string nextScene;

	public bool[] sceneNumbers
	{
		get { return _sceneNumbers; }
		set { _sceneNumbers = value;  }
	}

	public void GoToNextScene()
	{
		SceneManager.LoadScene(nextScene);

	}

	void Start()
	{
		_sceneNumbers = new bool[2];
		zInicial = transform.position.z;
		Debug.Log(zInicial);
	}
	void Update()
	{
		if (Input.GetMouseButtonDown(0))
		{
			seleccionarPieza();
		}else if (Input.GetMouseButtonUp(0))
		{
			estaPulsado = false;
		}
		if (estaPulsado)
		{
			moverPieza();
		}
	}

	void seleccionarPieza()
	{
		
		RaycastHit2D hit = Physics2D.Raycast(Camera.main.ScreenToWorldPoint(Input.mousePosition), Vector2.zero);
		if (hit){
			if (hit.collider.gameObject.tag == "ball")
			{
				distanciaRayo = hit.distance; //distanciaRayo será un valor que utilizaremos más adelante
				pieza = hit.collider.gameObject;
				Debug.Log(pieza);
				estaPulsado = true;
			}
		}
		
	}


	void moverPieza()
	{
		Ray rayo = Camera.main.ScreenPointToRay(Input.mousePosition);
		Vector3 limiteRayo = rayo.GetPoint(distanciaRayo);
		limiteRayo = new Vector3(limiteRayo.x, limiteRayo.y, zInicial);
		pieza.transform.position = limiteRayo;
	}

	public bool estaPulsado
	{
		get { return _estaPulsado; }
		set { _estaPulsado = value; }
	}
	
	
}
