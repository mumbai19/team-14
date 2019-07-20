using System;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class LoadImage : MonoBehaviour
{
    string url = "https://images-na.ssl-images-amazon.com/images/I/61rGBNJz9NL._SL1000_.jpg";
   // string url = "http://www.africau.edu/images/default/sample.pdfg";

    Texture2D img;

    // Start is called before the first frame update
    void Start()
    {
        StartCoroutine(LoadImg());
    }

    IEnumerator LoadImg()
    {
        yield return 0;
        WWW imgLink = new WWW(url);
        yield return imgLink;
        img = imgLink.texture;
    }

    // Update is called once per frame
    void OnGUI()
    {
        GUILayout.Label(img);
    }
}
