using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Enemy : MonoBehaviour
{
    Vector2 posInit;
    public Vector2 posEnd { get; set; }
    float time;
    string[] animationNames = { "OrugaWalking", "HormigaWalking", "AvispaFlying"};

    void Start()
    {
        GetComponent<Animator>().Play(animationNames[Random.Range(0, animationNames.Length)]);
        posInit = transform.position;
    }

    private void OnMouseDown()
    {
        GetComponent<Animator>().Play("Explosion");
        float time = Utils.GetAnimationClipTime(GetComponent<Animator>(), "Explosion");
        Destroy(gameObject, time);
    }


    private void Update()
    {
        time += 0.1f * Time.deltaTime;
        transform.position = Vector2.Lerp(posInit, posEnd, time);
    }
}
