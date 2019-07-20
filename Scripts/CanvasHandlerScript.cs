using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class CanvasHandlerScript : MonoBehaviour
{


    private Button videoButton;
    private GameObject youtubePlayerObject;
    private List<GameObject> youtubePlayersList;
    private Button cancelButton;
    private GameObject canvasObject;
    private GameObject tags;
    private GameObject defaultPanel;
    private Button lastButtonClicked;

    // Start is called before the first frame update
    void Start()
    {

        videoButton = GameObject.Find("VideoButton").GetComponent<Button>();

        youtubePlayersList = new List<GameObject>();
        canvasObject = GameObject.Find("UICanvas");
        tags = GameObject.Find("Tags");
        defaultPanel = GameObject.Find("DefaultPanel");
        //cancelButton = GameObject.FindWithTag("Cancel");
        cancelButton = GameObject.Find("CancelButton").GetComponent<Button>();

        videoButton.gameObject.SetActive(true);


        foreach(YoutubePlayer youtubePlayer in canvasObject.GetComponentsInChildren<YoutubePlayer>())
        {
            youtubePlayersList.Add(youtubePlayer.gameObject);
            youtubePlayer.gameObject.SetActive(false);
        }
       



        videoButton.onClick.AddListener(delegate {

                lastButtonClicked = videoButton;
                cancelButton.gameObject.SetActive(!cancelButton.gameObject.activeInHierarchy);




            foreach (GameObject tempGameObject in youtubePlayersList)
                { 
                    youtubePlayerObject = tempGameObject;
                    tempGameObject.SetActive(true);
                    youtubePlayerObject.GetComponent<YoutubePlayer>().Play();
                    cancelButton = GetCancelButton(tempGameObject);
                    
                }
            

        });

        cancelButton.onClick.AddListener(delegate {

            lastButtonClicked = cancelButton;



            foreach (YoutubePlayer youtubePlayer in canvasObject.GetComponentsInChildren<YoutubePlayer>())
            {
                youtubePlayer.gameObject.SetActive(false);
            }

        });


        //Firebase.FirebaseApp.CheckAndFixDependenciesAsync().ContinueWith(task => {
        //    var dependencyStatus = task.Result;
        //    if (dependencyStatus == Firebase.DependencyStatus.Available)
        //    {
        //        // Create and hold a reference to your FirebaseApp,
        //        // where app is a Firebase.FirebaseApp property of your application class.
        //           //app = Firebase.FirebaseApp.DefaultInstance;

        //        // Set a flag here to indicate whether Firebase is ready to use by your app.
        //    }
        //    else
        //    {
        //        UnityEngine.Debug.LogError(System.String.Format(
        //          "Could not resolve all Firebase dependencies: {0}", dependencyStatus));
        //        // Firebase Unity SDK is not safe to use here.
        //    }
        //});

    }

    // Update is called once per frame
    void Update()
    {

        //defaultPanel.SetActive(!DefaultTrackableEventHandler.isTrackingFound);


        if(lastButtonClicked)
        {
            switch (lastButtonClicked.gameObject.name)
            {

                case "VideoButton":

                    if (gameObject.GetComponent<RotateScript>().enabled)
                        gameObject.GetComponent<RotateScript>().enabled = false;

                    videoButton.gameObject.SetActive(true);

                    break;
                
                case "CancelButton":

                    //videoButton.gameObject.SetActive(false);
                    //videoButton.interactable = true;
                    Debug.Log("Cancel clicked");
                    if (!gameObject.GetComponent<RotateScript>().enabled)
                        gameObject.GetComponent<RotateScript>().enabled = true;
                   // gameObject.AddComponent<RotateScript>();



                    //CancelButtonClicked();
                    //foreach (YoutubePlayer youtubePlayer in canvasObject.GetComponentsInChildren<YoutubePlayer>())
                    //{
                    //    youtubePlayersList.Add(youtubePlayer.gameObject);
                    //    youtubePlayer.gameObject.SetActive(false);
                    //}                    //lastButtonClicked = componentButton;

                    break;
            }
        }

    }

    private Button GetCancelButton(GameObject tempGameObject)
    {
        foreach (Button tempButton in tempGameObject.GetComponentsInChildren<Button>())
            if (tempButton.gameObject.tag == "Cancel")
                return tempButton;
        return null;
    }

    public void CancelButtonClicked()
    {
        if(cancelButton)
        {


                lastButtonClicked = cancelButton;

                Transform rootTransform = cancelButton.transform.root;
                Transform tempTransform = cancelButton.transform;

                while (tempTransform.parent != rootTransform)
                    tempTransform = tempTransform.parent;

                tempTransform.gameObject.SetActive(false);

        }
    }


    private void HideSprite(bool value)
    {
        foreach (SpriteRenderer spriteRenderer in tags.GetComponentsInChildren<SpriteRenderer>())
        {
            spriteRenderer.enabled = !value;
            if (spriteRenderer.gameObject.GetComponent<Collider>())
                spriteRenderer.gameObject.GetComponent<Collider>().enabled = !value;
        }
    }
}
