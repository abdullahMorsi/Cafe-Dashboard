<x-layout>
    <x-side-links/>

    <div class="content" style="height: fit-content; top:67px">
        <h3 style="font-size: 20px; font-weight: 600;">الاعدادات</h3>
        <p style="color:#b9b0b0;font-size: 14px; ">هذا النص هو مثال لنص يمكن ان يستبل مكانه</p>

        <div class="settingContent">
            <div class="client-info">
                <img src="photos/personal.jpg" alt="personal">

                <div class="camera_icon">
                    <i class="fas fa-camera"></i>
                </div>

                <div class="details">
                    <p class="name">{{auth()->user()->name}}</p>
                    <p class="job" style="color:#f47321;font-size: 11px; display:inline-block;font-weight: 300;">سينتهي اشتراكك في
                        {{date('d-m-Y', strtotime(auth()->user()->created_at->addYear()))}}</p>
                    <a href="#">تجديد</a>
                </div>
            </div>

            <form action="" class="form3">
                <label for="">اسم المستخدم </label>
                <input type="text" placeholder="{{auth()->user()->name}}">

                <label for="">رقم الجوال</label>
                <input type="text" placeholder="{{auth()->user()->phone_number}}">

                <!-- google map -->
                <label for="">العنوان</label>
                <div class="location">
                    <!-- Button trigger modal -->
                    <input type="text" readonly id="address" class="bg-transparent  form-control"
                        data-toggle="modal" data-target="#staticBackdrop">

                    <!-- Modal -->
                    <div class="modal fade maxvh topz overflow-hidden" id="staticBackdrop"
                        data-backdrop="static" data-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="map">

                                        <div class="form-group">
                                            <div id="map" style=" height: 400px;"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">اغلاق</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <i class="fas fa-map-marker" id="marker"></i>


                <label for="">نبذه تعريفية</label>
                <textarea placeholder="هذا النص هو مثال لنص يمكن ان يستبدل مكانه"></textarea>

                <label for="">رابط الموقع </label>
                <input type="text" placeholder="https//:aait">

                <label for="">رقم الواتساب</label>
                <input type="text" placeholder="5464633">

                <label for="">ملاحظات اخرى</label>
                <textarea placeholder="هذا النص هو مثال لنص يمكن ان يستبدل مكانه"></textarea>

                <button class="add">اضافة</button>

            </form>
    </div>
</div>


    <script src="js/bundle.js"></script>
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyA9_ve_oT3ynCaAF8Ji4oBuDjOhWEHE92U'></script>    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1q3mOavSIZKMyT3HOoJiyEhEJYDcH7IY"></script> -->
    <script>
        var map;
        var marker;
        var myLatlng = new google.maps.LatLng(24.774265, 46.738586);
        var geocoder = new google.maps.Geocoder();
        var infowindow = new google.maps.InfoWindow();
        // var deletFile = document.querySelector(".deleteFile");

        function initMap() {
            var mapOptions = {
                zoom: 10,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("map"), mapOptions);

            marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                draggable: true
            });

            geocoder.geocode({ 'latLng': myLatlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        $('#latitude,#longitude').show();
                        $('#address').val(results[0].formatted_address);
                        $('#resultAddress').val(results[0].formatted_address);
                        $('#latitude').val(marker.getPosition().lat());
                        $('#longitude').val(marker.getPosition().lng());
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });

            google.maps.event.addListener(marker, 'dragend', function () {

                geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#address').val(results[0].formatted_address);
                            $('#resultAddress').val(results[0].formatted_address);
                            $('#lat').val(marker.getPosition().lat());
                            $('#lng').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });

        }
        google.maps.event.addDomListener(window, 'load', initMap);

        function readURL(input, image, link) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    image.attr('src', e.target.result);
                    link.attr('href', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }



        // Add File
        const selectedFilesCont = document.getElementById('selectedFilesCont');

        function deleteFile(ele, name) {
            const chat_files = document.getElementById('docs');
            let files = new DataTransfer();
            console.log(chat_files.files);
            for (let i = 0; i < chat_files.files.length; i++) {
                if (chat_files.files[i].name == name) {
                    continue;
                }
                files.items.add(chat_files.files[i]);
            }
            chat_files.files = files.files;
            console.log(chat_files.files);
            $(ele).remove();
        }

        function selectFile(event) {
            if (event.target.files && event.target.files[0]) {
                selectedFilesCont.innerHTML = '';
                for (let i = 0; i < event.target.files.length; i++) {
                    const name = event.target.files[i].name;
                    const extensition = name[name.length - 2] + name[name.length - 1];
                    // const extensition2 =  name[name.length-2] + name[name.length-1];
                    console.log(extensition);

                    selectedFilesCont.innerHTML +=

                        '<div class="imgText  w-100 d-flex justify-content-between p-3">' +
                        '    <div id=""' +
                        '        class="w-100 filetitel justify-content-between d-flex align-items-center">' +
                        '        <div class="file-info d-flex align-items-center">' +
                        '            <img src="img/exFil/' + extensition + ".png" + '" class="d-inline-block" width="30px"' +
                        '                height="30px" alt="">' +
                        '            <div class ="  fileinfooo">' +
                        '            <p class =" 15px">' + name + '</p>' +
                        '            <p class ="block gray">' +
                        '            p250KB' +
                        '            </p>' +
                        '            </div>' +
                        '        </div>' +
                        '        <div class="deleteFile" onclick="deleteFile(this.parentElement.parentElement ,\'' + event.target.files[i].name + '\');" ><i class="fas fa-times-circle"></i></div>' +
                        '    </div>' +
                        '</div>';


                }
            }
        }
    </script>
    </x-layout>
