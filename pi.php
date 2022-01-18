<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="D:\zuoye\webka\xampp\project\locale\htdocs\login\icon">
    <link href="pi.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <title>Talkezy</title>
    <title>personal page</title>
    <script>
        // $(function(){
        //     $("#head").load('http://127.0.0.1:5501/project/navi.html');
        //     // $(".headerpage").load('http://127.0.0.1:5501/project/navi.html');
        //     // $(".footerpage").load("http://www.load.com/footer.html");
        // });
        
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
})
    </script>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<div>
        <?php
            include 'navi.php';
        ?>
    </div>
    <main>
        <div class="all">
            <!-- card -->
                <div class="userCard">
                    <div>
                    <!-- <label>
                        <input type="file" accept="image/png,image/jpeg" class="UploadPicture-input">
                    </label> -->
                    </div>
                    <!-- <div>
                        <button type="button" class="Button DynamicColorButton">​<span>>Upload image</span></button>
                    </div> -->
                    <div style="height:200px;padding-bottom:0;">
                        <div>
                            <img class="Userpic" src="pic/read.jpg" width="500%" style="padding-bottom:0;">
                            <a class="linkName">shuak</a>
                        </div>
                        <!-- Button trigger modal -->
                    </div>
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-dicoration:center;">
                            edit
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit personal file</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputtext" class="col-sm-2 col-form-label">username</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputtext" class="col-sm-2 col-form-label">signature</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputtext" class="col-sm-2 col-form-label">Blog link</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                        <div class="col-sm-10">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                              female
                                            </label>
                                            </div>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                              male
                                            </label>
                                            </div>  
                                      
                                      </fieldset>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">saved</button>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
                <div class="postCard">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Article</button>
                          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Topic</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Answer</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Saved</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Follow</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Ask</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Comment</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                    </div>
                <div>

                <!-- <div class="aside">
                            <div class="week4">
                            <ul>
                                <li>
                                    <a target="_blank" type="button" href="#">
                                        <svg fill="currentColor" viewBox="0 0 24 24" width="18" height="18">
                                            <path d="M5.515 19.64l.918-5.355-3.89-3.792c-.926-.902-.639-1.784.64-1.97L8.56 
                                            7.74l2.404-4.871c.572-1.16 1.5-1.16 2.072 0L15.44 7.74l5.377.782c1.28.186 1.566 
                                            1.068.64 1.97l-3.89 3.793.918 5.354c.219 1.274-.532 1.82-1.676 1.218L12 18.33l-4.808 
                                            2.528c-1.145.602-1.896.056-1.677-1.218z" fill-rule="evenodd"></path>
                                        </svg><span>my collection</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" type="button" href="#">
                                        <svg fill="currentColor" viewBox="0 0 24 24" width="18" height="18">
                                            <path
                                                d="M5.74 4h12.52c.961 0 1.74.775 1.74 1.73V16.27c0 .955-.779 1.73-1.74 1.73h-3.825l-1.658 2.044a1 
                                            1 0 0 1-1.554 0l-1.658-2.044H5.74C4.78 18 4 17.224 4 16.27V5.73C4 4.775 4.778 4 5.74 4zM12 16a.976.976 0 0 
                                            0 .705-.287.951.951 0 0 0 .295-.712.954.954 0 0 0-.295-.714A.976.976 0 0 0 12 14a.962.962 0 0 
                                            0-.705.295A.961.961 0 0 0 11 15c0 .284.098.522.295.713A.975.975 0 0 0 12 16zm1.278-4.924a36.81 36.81 0 
                                            0 0 1.023-.975c.19-.193.354-.422.492-.688.138-.266.207-.575.207-.928 0-.448-.12-.864-.363-1.246a2.517 
                                            2.517 0 0 0-1.029-.906C13.164 6.111 12.652 6 12.072 6c-.624 0-1.17.133-1.638.399-.468.265-.824.6-1.068 
                                            1.005-.244.405-.366.804-.366 1.2 0 .19.077.368.231.531a.747.747 0 0 0 .567.246c.38 
                                            0 .638-.234.774-.703.144-.449.32-.788.528-1.019.208-.23.532-.345.972-.345.376 
                                            0 .683.114.921.342.238.229.357.51.357.841 0 .17-.039.328-.117.473a1.782 1.782 0 0 
                                            1-.288.396c-.114.118-.3.294-.555.526a9.71 9.71 0 0 0-.696.688c-.172.194-.31.418-.414.673a2.391 
                                            2.391 0 0 0-.156.906c0 .278.071.488.213.63a.716.716 0 0 0 .525.211c.4 
                                            0 .638-.216.714-.648.044-.203.077-.345.099-.426.022-.081.053-.162.093-.243.04-.081.101-.17.183-.268.082-.098.191-.21.327-.34z"
                                                fill-rule="evenodd"></path>
                                        </svg><span>My concern</span></a>
                                </li>
                                <li>
                                    <a target="_blank" type="button" href="#">
                                        <svg fill="currentColor" viewBox="0 0 24 24" width="18" height="18">
                                            <path
                                                d="M4 10V8a1 1 0 1 1 2 0v2h2a1 1 0 0 1 0 2H6v2a1 1 0 0 1-2 0v-2H2a1 1 0 0 1 
                                            0-2h2zm10.455 2c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm-7 6c0-2.66 4.845-4 
                                            7.272-4C17.155 14 22 15.34 22 18v1.375c0 .345-.28.625-.625.625H8.08a.625.625 0 0 1-.625-.625V18z"
                                                fill-rule="evenodd">
                                            </path>
                                        </svg><span>My invitation</span></a>
                                </li>
                                <li>
                                    <a target="_blank" type="button" href="#">
                                        <svg fill="currentColor" viewBox="0 0 24 24" width="18" height="18">
                                            <path d="M19 19.5H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10.5a2 2 0 0 1-2 
                                            2zm0-12a.5.5 0 0 0-.5-.5h-13a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h3.75c1 0 1 2 2.75 2s1.75-2 
                                            2.75-2h3.75a.5.5 0 0 0 .5-.5v-2z" fill-rule="evenodd"></path>
                                        </svg><span>My credibility</span></a>
                                </li>
                                <li>
                                    <a target="_blank" type="button" href="#">
                                        <svg fill="currentColor" viewBox="0 0 24 24" width="18" height="18">
                                            <path d="M5.74 4h12.52c.961 0 1.74.775 1.74 1.73V16.27c0 .955-.779 1.73-1.74 
                                            1.73h-3.825l-1.658 2.044a1 1 0 0 1-1.554 0l-1.658-2.044H5.74C4.78 18 4 17.224
                                            4 16.27V5.73C4 4.775 4.778 4 5.74 4zM7 8.98c0 .554.449.996 1.003.996h4.994A.992.992 0 
                                            0 0 14 8.981a.997.997 0 0 0-1.003-.995H8.003A.992.992 0 0 0 7 8.98zm0 4c0 .554.446.996.995.996h8.01a.993.993 
                                            0 0 0 .995-.995.993.993 0 0 0-.995-.995h-8.01A.993.993 0 0 0 7 12.98z"
                                                fill-rule="evenodd">
                                            </path>
                                        </svg><span>Station Service Center</span></a>
                                </li>
                                <li>
                                    <a target="_blank" type="button" href="#">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="currentColor">
                                            <path d="M9 1.5c2.835 0 5.152 2.195 5.247 4.949l.003.176v.253A2.25 2.25 0 
                                            0115.75 9v2.25a2.25 2.25 0 01-1.5 2.122v.257c0 .547-.2 1.073-.557 1.482l-.102.109-1.06 1.06a.75.75 0 
                                            01-1.124-.99l.063-.07 1.06-1.061a.75.75 0 00.213-.432l.007-.098V13.5H12a.75.75 0 01-.75-.75V7.5a.75.75 
                                            0 01.75-.75h.75v-.125C12.75 4.628 11.076 3 9 3 6.98 3 5.34 4.541 5.254 6.464l-.004.286H6a.75.75 0 
                                            01.743.648l.007.102v5.25a.75.75 0 01-.648.743L6 13.5H4.5a2.25 2.25 0 01-2.245-2.096l-.005-.154V9c0-.98.626-1.814 
                                            1.5-2.122v-.253C3.75 3.79 6.105 1.5 9 1.5z" fill-rule="evenodd"></path>
                                        </svg><span>Help center</span></a>
                                </li>
                            </ul>
                        </div> -->
            </div>
        </div>
    </main>
</body>
</html>