﻿using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Controller2D : RaycastController {
	public LayerMask collisionMask;
	public CollisionInfo collisions;
	float maxClimbAngle = 80;
    float maxDescendAngle = 80;
    public Vector2 playerInput;

    public void Move(Vector3 velocity, bool standingOnPlatform)
    {
        Move(velocity, Vector2.zero, standingOnPlatform);
    }

    public override void Start()
    {
        base.Start();
        collisions.faceDir = 1;
    }


    public void Move (Vector3 velocity, Vector2 input, bool standingOnPlatform = false)
    {
		UpdateRaycastOrigins ();
		collisions.Reset ();
        collisions.velocityOld = velocity;
        playerInput = input;
        if (velocity.y < 0)
        {
            DescendSlope(ref velocity);
        }
        if (velocity.x != 0) {
            collisions.faceDir = (int)Mathf.Sign(velocity.x);
		}
        HorizontalCollisions(ref velocity);

        if (velocity.y != 0) {
			VerticalCollisions (ref velocity);
		}
		transform.Translate (velocity);
        if (standingOnPlatform)
        {
            collisions.below = true;
        }
    }

    void DescendSlope(ref Vector3 velocity)
    {
        float directionX = Mathf.Sign(velocity.x);
        Vector2 rayOrigin = (directionX == -1) ? raycastOrigins.bottomRight : raycastOrigins.bottomLeft;
        RaycastHit2D hit = Physics2D.Raycast(rayOrigin, -Vector2.up, Mathf.Infinity, collisionMask);

        if (hit)
        {
            float slopeAngle = Vector2.Angle(hit.normal, Vector2.up);
            if (slopeAngle != 0 && slopeAngle <= maxDescendAngle)
            {
                if (Mathf.Sign(hit.normal.x) == directionX)
                {
                    if (hit.distance - skinWidth <= Mathf.Tan(slopeAngle * Mathf.Deg2Rad) * Mathf.Abs(velocity.x))
                    {
                        float moveDistance = Mathf.Abs(velocity.x);
                        float descendVelocityY = Mathf.Sin(slopeAngle * Mathf.Deg2Rad) * moveDistance;
                        velocity.x = Mathf.Cos(slopeAngle * Mathf.Deg2Rad) * moveDistance * Mathf.Sign(velocity.x);
                        velocity.y -= descendVelocityY;

                        collisions.slopeAngle = slopeAngle;
                        collisions.descendingSlope = true;
                        collisions.below = true;
                    }
                }
            }
        }

       /* 
        
                        float moveDistance = Mathf.Abs(velocity.x);
                        float descendVelocityY = Mathf.Sin(slopeAngle * Mathf.Deg2Rad) * moveDistance;
                        velocity.x = Mathf.Sin(slopeAngle * Mathf.Deg2Rad) * moveDistance * Mathf.Sign(velocity.x);
                        velocity.y -= descendVelocityY;
                        collisions.slopeAngle = slopeAngle;
                        collisions.descendingSlope = true;
                        collisions.below = true;
                    }
                }
            }
        }*/
    }

    public void VerticalCollisions (ref Vector3 velocity) {
		float directionY = Mathf.Sign (velocity.y);
		float rayLength = Mathf.Abs (velocity.y) + skinWidth;
		for (int i = 0; i < verticalRayCount; i++) {
			//Vector2 rayOrigin = raycastOrigins.bottomLeft;
			     Vector2 rayOrigin = (directionY == -1) ? raycastOrigins.bottomLeft : raycastOrigins.topLeft;

            rayOrigin += Vector2.right * (verticalRaySpacing * i + velocity.x);
			Debug.DrawRay (rayOrigin, Vector2.up * -2, Color.red);

			RaycastHit2D hit = Physics2D.Raycast (rayOrigin, Vector2.up * directionY, rayLength, collisionMask);
			if (hit) {
                if (hit.collider.tag == "Through")
                {
                    if (directionY == 1 || hit.distance == 0)
                    {
                        continue;
                    }
                    if (playerInput.y == -1)
                    {
                        continue;
                    }
                }


                velocity.y = (hit.distance - skinWidth) * directionY;
				rayLength = hit.distance;
				//Si estamos subiendo, velocidad X depende de la velocidad de subida
				if (collisions.climbingSlope) {
					velocity.x = velocity.y / Mathf.Tan(collisions.slopeAngle * Mathf.Deg2Rad) * Mathf.Sign(velocity.x);
				}
				collisions.below = directionY == -1; // Si está llendo hacia arriba, y colisiona, below valdrá true
				collisions.above = directionY == 1; //
			}
			
		}
		if (collisions.climbingSlope) {
			float directionX = Mathf.Sign(velocity.x);
			rayLength = Mathf.Abs(velocity.x) + skinWidth;
			Vector2 rayOrigin = ((directionX == -1)?raycastOrigins.bottomLeft:raycastOrigins.bottomRight) + Vector2.up * velocity.y;
			RaycastHit2D hit = Physics2D.Raycast(rayOrigin,Vector2.right * directionX,rayLength,collisionMask);

			if (hit) {
				float slopeAngle = Vector2.Angle(hit.normal,Vector2.up);
				if (slopeAngle != collisions.slopeAngle) {
					velocity.x = (hit.distance - skinWidth) * directionX;
					collisions.slopeAngle = slopeAngle;
				}
			}
		}
	}

	void HorizontalCollisions (ref Vector3 velocity) {
        float directionX = collisions.faceDir; 
        float rayLength = Mathf.Abs (velocity.x) + skinWidth;
        if (Mathf.Abs(velocity.x) < skinWidth)
        {
            rayLength = 2 * skinWidth;
        }
        for (int i = 0; i < horizontalRayCount; i++) {
			Vector2 rayOrigin = (directionX == -1) ? raycastOrigins.bottomLeft : raycastOrigins.bottomRight;
			rayOrigin += Vector2.up * horizontalRaySpacing * i;
			RaycastHit2D hit = Physics2D.Raycast (rayOrigin, Vector2.right * directionX, rayLength, collisionMask);
			Debug.DrawRay (rayOrigin, Vector2.right * directionX * rayLength, Color.blue);
			if (hit) {
                if (hit.distance == 0)
                {
                    continue;
                }
                if (hit.distance == 0)
                {
                    continue;
                }
                float slopeAngle = Vector2.Angle (hit.normal, Vector2.up);
				if (i == 0 && slopeAngle <= maxClimbAngle) {

                    if (collisions.descendingSlope)
                    {
                        collisions.descendingSlope = false;
                        velocity = collisions.velocityOld;
                    }


                    ClimbSlope (ref velocity, slopeAngle);
				}
				if (!collisions.climbingSlope || slopeAngle > maxClimbAngle) {

					velocity.x = (hit.distance - skinWidth) * directionX;
					rayLength = hit.distance;

					//Si estamos no subimos o el angulo de subida es demasiado, velocidad Y depende del angulo de subida
					if (collisions.climbingSlope) {
						velocity.y = Mathf.Tan(collisions.slopeAngle * Mathf.Deg2Rad) * Mathf.Abs(velocity.x);
					}
					collisions.left = directionX == -1; // Si está llendo hacia la izquierda, y colisiona, left valdrá true
					collisions.right = directionX == 1;
				}
			}
		}
	}

	public struct CollisionInfo {
        public Vector3 velocityOld;
        public bool above, below;
		public bool left, right;
		public bool climbingSlope;
		public float slopeAngle, slopeAngleOld;
        public bool descendingSlope;
        public float faceDir;

        public void Reset () {
			above = below = false;
			left = right = false;
			climbingSlope = false;
			slopeAngleOld = slopeAngle;
            descendingSlope = false;
            slopeAngle = 0;
        }
	}

	void ClimbSlope (ref Vector3 velocity, float slopeAngle) {
		float moveDistance = Mathf.Abs (velocity.x);
		float climbVelocityY = Mathf.Sin (slopeAngle * Mathf.Deg2Rad) * moveDistance;
		if (velocity.y <= climbVelocityY) {
			velocity.y = climbVelocityY;
			velocity.x = Mathf.Cos (slopeAngle * Mathf.Deg2Rad) * moveDistance * Mathf.Sign (velocity.x);
			collisions.below = true;
			collisions.climbingSlope = true;
			collisions.slopeAngle = slopeAngle;
            slopeAngle = 0;
		}
	}
}