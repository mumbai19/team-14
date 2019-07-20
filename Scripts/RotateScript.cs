using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.EventSystems;

public class RotateScript : MonoBehaviour, IBeginDragHandler
{
    Vector3 prevPos = Vector3.zero;
    Vector3 deltaPos = Vector3.zero;
    private Vector3 center;

    private void Start()
    {
        center = GameObject.Find("RotateHandler").transform.position;
    }

    // Update is called once per frame
    void Update()
    {
        if (Input.GetMouseButton(0))
        {
            deltaPos = Input.mousePosition - prevPos;

            if (Vector3.Dot(transform.up, Vector3.up) >= 0)
                transform.RotateAround(center, Vector3.up, -Vector3.Dot(deltaPos, Camera.main.transform.right) / 7);
            else
                transform.RotateAround(center, Vector3.up, Vector3.Dot(deltaPos, Camera.main.transform.right) / 7);
        }
        prevPos = Input.mousePosition;
    }

    public void OnBeginDrag(PointerEventData eventData)
    {
        Debug.Log("Hello begindrag");
    }

    private void OnMouseDrag()
    {
        Debug.Log("Hello mousedrag");
    }
}
