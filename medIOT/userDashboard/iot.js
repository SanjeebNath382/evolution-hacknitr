const change = ()=>{
    const chkBtn = document.getElementById("chkbtn");
    chkBtn.style.display="none";
    var config={
        apiKey: "AIzaSyBAS5SH-JAfMO3rREDf8rWZ-MbyAFTU6ms",
        authDomain: "hacknitr-c0c75.firebaseapp.com",
        databaseURL: "https://hacknitr-c0c75-default-rtdb.firebaseio.com/",
        storageBucket: "gs://hacknitr-c0c75.appspot.com"
    };
    firebase.initializeApp(config);
    var database = firebase.database();
    var ref=database.ref("sensor");
    ref.endAt().limitToLast(1).on('child_added', function(snapshot) {
        snapshot.forEach(function(childSnapshot) {
          var childData = childSnapshot.val();
         console.log(childData);
         const oxysat = document.getElementById("oxysat");
         oxysat.value= childData.oxysat;
         const bp = document.getElementById("bp");
         bp.value= childData.pressure;
         const temp = document.getElementById("temp");
         temp.value= childData.temp;
         const formItems = document.getElementById("formItems");
         formItems.style.display="block";
        });
    });
}