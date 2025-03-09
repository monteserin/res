using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class RaycastController : MonoBehaviour {
	const float dstBetweenRays = 0.25f;
	[HideInInspector]
	public int verticalRayCount = 4; // lanzaremos 4 rayos hacia abajo. Esto se podrá cambiar desde el inspector
	[HideInInspector]
	public float verticalRaySpacing = 1;
	public BoxCollider2D collider;
	// raycastOrigins es una estructura que contiene las coordenadas de cada una de las cuatro esquinas del cubo
	public RaycastOrigins raycastOrigins;

	[HideInInspector]
	public int horizontalRayCount = 4;
	[HideInInspector]
	public float horizontalRaySpacing;

	public float skinWidth = 0.015f;

	public virtual void Start () {
		CalculateRaySpacing ();
	}

	public void UpdateRaycastOrigins () {
		Bounds bounds = collider.bounds;
		bounds.Expand (skinWidth * -2);
		raycastOrigins.bottomLeft = new Vector2 (bounds.min.x, bounds.min.y);
		raycastOrigins.bottomRight = new Vector2 (bounds.max.x, bounds.min.y);
		raycastOrigins.topLeft = new Vector2 (bounds.min.x, bounds.max.y);
		raycastOrigins.topRight = new Vector2 (bounds.max.x, bounds.max.y);
	}
    public virtual void Awake()
    {
        collider = GetComponent<BoxCollider2D>();
    }

    public void CalculateRaySpacing () {
		Bounds bounds = collider.bounds;
		bounds.Expand (skinWidth * -2);

		float boundsWidth = bounds.size.x;
		verticalRayCount = Mathf.RoundToInt (boundsWidth / dstBetweenRays);
		verticalRaySpacing = bounds.size.x / (verticalRayCount - 1);
		horizontalRayCount = Mathf.Clamp (horizontalRayCount, 2, int.MaxValue);
		horizontalRaySpacing = bounds.size.y / (horizontalRayCount - 1);
	}

	public struct RaycastOrigins {
		public Vector2 topLeft, topRight, bottomLeft, bottomRight;
	}
}