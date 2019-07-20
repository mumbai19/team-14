using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEditor;
using System;

public class AddDynamicObjects : MonoBehaviour
{
    private Vector3 center = Vector3.zero;
    public static Vector3 initialPosition;

    private void Awake()
    {
        initialPosition = transform.localPosition;

        GameObject tempGameObject = new GameObject("RotateHandler");
        int count = 0;
        foreach (Collider tempCollider in transform.root.GetComponentsInChildren<Collider>())
        {
            count++;
            center += tempCollider.bounds.center;
        }
        center /= count;
        tempGameObject.transform.position = center;

        gameObject.AddComponent<RotateScript>();
    }

}