using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class LoserArea : MonoBehaviour
{
	int marker = 3;
	public Sprite blackHeart;
	void OnTriggerEnter2D(Collider2D col)
	{
		marker--;
		if (marker == 2)
		{
			GameObject.Find("Live3").GetComponent<SpriteRenderer>().sprite = blackHeart;
		}else if (marker == 1)
		{
			GameObject.Find("Live2").GetComponent<SpriteRenderer>().sprite = blackHeart;
		}else if (marker == 0)
		{
			GameObject.Find("Live1").GetComponent<SpriteRenderer>().sprite = blackHeart;
			UnityEngine.SceneManagement.SceneManager.LoadScene("GameOver");

		}
	}
}
