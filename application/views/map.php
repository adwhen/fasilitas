<html>


<head>
    <title>Map Fasilitas</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        #map {
            height: 100%;
        }


        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Fasilitas</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" id="gambar">
                    <img style="width:100%;height:30vh" src="<?= base_url('assets/2021-10-22.jpg') ?>" alt="">
                </div>
                <hr>
                <div class="container">
                    <div id="judul">
                        <h6>Kapal KAyu</h6>
                    </div>

                    <table style="width: 100%;">
                        <tr>
                            <td style="text-align: center;">
                                <img id alt="" jstcache="247" src="//www.gstatic.com/images/icons/material/system_gm/1x/place_gm_blue_24dp.png" class="Liguzb" jsan="7.Liguzb,0.alt,8.src">
                            </td>
                            <td id="lokasi">pulau baai bela bela</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><img id alt="" jstcache="247" src="https://www.gstatic.com/images/icons/material/system_gm/1x/label_gm_blue_24dp.png" class="Liguzb" jsan="7.Liguzb,0.alt,8.src"></td>
                            <td id="note"></td>
                        </tr>

                    </table>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div id="map"></div>




    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAL3wnR5RPZiMKWjzoitiujIowGzdzzvU&callback=initMap">
    </script>
    <script>
        let map;
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
            keyboard: false
        })

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -3.9094728424575864,
                    lng: 102.29057241089914
                },
                mapTypeId: google.maps.MapTypeId.HYBRID,
                zoom: 15,
            });

            const data = [
                <?php foreach ($data as $dt) : ?> {
                        lat: <?= $dt['lat'] ?>,
                        lng: <?= $dt['lng'] ?>,
                        judul: '<?= $dt['name_facility'] ?>',
                        file: '<?= base_url('assets/img/') . $dt['file'] ?>',
                        lokasi: '<?= $dt['locate'] ?>',
                        note: '<?= $dt['note'] ?>'
                    },
                <?php endforeach; ?>
            ]
            for (let index = 0; index < data.length; index++) {

                var marker = new google.maps.Marker({
                    position: {
                        lat: parseFloat(data[index].lat),
                        lng: parseFloat(data[index].lng)
                    },
                    map,
                    data: {
                        judul: data[index].judul,
                        file: data[index].file,
                        lat: data[index].lat,
                        lng: data[index].lng,
                        lokasi: data[index].lokasi,
                        note: data[index].note
                    }

                });

                attachSecretMessage(marker, marker.data);
            }
        }

        function attachSecretMessage(marker, data) {
            marker.addListener("click", () => {
                console.log(data)
                $("#judul").html("<h6>" + data.judul + "</h6>")
                $("#lokasi").html(data.lokasi)
                $("#gambar").html('<img style="width:100%;height:30vh" src="' + data.file + '" alt="">')
                $("#note").html(data.note)
                myModal.show()
            });
        }

        window.initMap = initMap;
    </script>

</body>


</html>