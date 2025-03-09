using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using Photon.Pun;

public class Player : Photon.Pun.MonoBehaviourPun
{
    Controls controls;
    PhotonView photonView;
    enum Controls
    {
        Idle,
        Left,
        Right
    }

    private void Start()
    {
        photonView = gameObject.GetComponent<PhotonView>();
    }
    void Update()
    {
        if (photonView.IsMine)
        {
            if (Input.GetKey(KeyCode.LeftArrow))
            {
                controls = Controls.Left;
            }else if (Input.GetKey(KeyCode.RightArrow))
            {
                controls = Controls.Right;
            }
            Move();
        }
    }

    private void Move()
    {
        if (controls == Controls.Left)
        {
            transform.Translate(new Vector2(-0.01f, 0));
        }
        else if (controls == Controls.Right)
        {
            transform.Translate(new Vector2(0.01f, 0));
        }
    }
}
