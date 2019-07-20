using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class UIDrag : MonoBehaviour
{
    float offsetX;
    float offsetY;
    private Vector2 screenDimensions;

    private void Start()
    {
        //screenDimensions = Camera.main.ScreenToWorldPoint(new Vector3(Screen.width, Screen.height, Camera.main.transform.position.z));

    }
    private void LateUpdate()
    {
        //RectTransform mrect = GetComponent<RectTransform>();
        //Vector2 apos = mrect.anchoredPosition;
        //float xpos = apos.x;
        //xpos = Mathf.Clamp(xpos, 0, Screen.width - mrect.sizeDelta.x);
        //apos.x = xpos;
        //mrect.anchoredPosition = apos;
        //transform.position.x = Mathf.Clamp(transform.position.x, -10f, 1000f);
        transform.position = new Vector3(Mathf.Clamp(transform.position.x, 2.0f, 1452.0f), Mathf.Clamp(transform.position.y, -9.0f, 552.0f), 0);
        //transform.position = new Vector3(Mathf.Clamp(transform.position.x, screenDimensions.x, screenDimensions.x*-1), Mathf.Clamp(transform.position.y, screenDimensions.y, screenDimensions.y*-1), 0);



    }
    public void BeginDrag()
    {
        offsetX = transform.position.x - Input.mousePosition.x;
        offsetY = transform.position.y - Input.mousePosition.y;
        Debug.Log("Screen Width : " + Screen.width);
        Debug.Log("Screen height : " + Screen.height);
        Debug.Log(screenDimensions);
        if (GameObject.FindWithTag("Player").GetComponent<RotateScript>())
            GameObject.FindWithTag("Player").GetComponent<RotateScript>().enabled = false;
    }

    public void OnDrag()
    {
        transform.position = new Vector3(offsetX + Input.mousePosition.x, offsetY + Input.mousePosition.y);
        //if (transform.position.x > screenDimensions.x)
        //{
        //    transform.position = new Vector3(screenDimensions.x, offsetY + Input.mousePosition.y);

        //}
        //else if (transform.position.y > screenDimensions.y)
        //{
        //    transform.position = new Vector3(offsetX + Input.mousePosition.x, screenDimensions.y);

        //}
    }

    public void EndDrag()
    {
        if (!GameObject.FindWithTag("Player").GetComponent<RotateScript>())
            GameObject.FindWithTag("Player").GetComponent<RotateScript>().enabled = true;
    }
}