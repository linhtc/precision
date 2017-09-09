<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Firebase
        <small>Test Firebase web</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 500CMS</a></li>
        <li class="active">Firebase</li>
    </ol>
</section>

<script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
<script>
    var config = {
        apiKey: "AIzaSyCXZUL-9udrxCkwevxAvBOHzmG04Mujq2w",
        authDomain: "testfcm-7f1a7.firebaseapp.com",
        databaseURL: "https://testfcm-7f1a7.firebaseio.com",
        storageBucket: "testfcm-7f1a7.appspot.com",
    };
    firebase.initializeApp(config);
    /*var provider = new firebase.auth.GithubAuthProvider();
    provider.addScope('repo');
    firebase.auth().signInWithPopup(provider).then(function(result) {
        var token = result.credential.accessToken;
        var user = result.user;
        console.log(token);
    }).catch(function(error) {
        var errorCode = error.code;
        var errorMessage = error.message;
        var email = error.email;
        var credential = error.credential;
        console.log(errorMessage);
    });*/
    var phoneModel = 2;
    var phoneImei = '123456788';
    var database = firebase.database();
    var versionsRef = database.ref('versions/'+phoneModel+'/'+phoneImei);
    versionsRef.on('value', function(snapshot) {
        var version = {};
        snapshot.forEach(function(childSnapshot) {
            var childKey = childSnapshot.key;
            var childValue = childSnapshot.val();
            version[childKey] = childValue;
        });
        console.log(version);
    });

</script>