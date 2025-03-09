using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Player : MonoBehaviour {
    private Rigidbody2D rb;
    private Vector2 movement;
    public int facing;
   	void Start () {
        rb = GetComponent<Rigidbody2D>();
	}
	
	void Update () {
        Vector2 directionalInput = new Vector2(Input.GetAxisRaw("Horizontal"), Input.GetAxisRaw("Vertical"));
        movement = rb.velocity;
        movement.x = directionalInput.x*5;
        facing = movement.x > 0 ? 1 : -1;  
        rb.velocity = movement;
    }
}
