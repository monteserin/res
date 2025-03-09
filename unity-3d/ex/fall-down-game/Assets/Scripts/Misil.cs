using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Misil : MonoBehaviour
{
    private void OnMouseDown()
    {
        GetComponent<Animator>().Play("Explosion");
        GetComponent<Rigidbody2D>().simulated = false;
        float explosionTime = GetComponent<Animator>().runtimeAnimatorController.animationClips[0].length;
        Destroy(gameObject, explosionTime);
    }
}
