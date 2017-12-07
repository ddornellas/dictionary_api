  var dataPHP, lng, lenSense,lexSense, counter, document, xmlhttp;

        lng = document.querySelector(".lnginput:checked").value;



        function showHint(str) {
            
            if (str.length == 0) {
                
                document.getElementById("txtHint").innerHTML = "";
                
                return;
                
            } else {
                
                xmlhttp = new XMLHttpRequest();
                
                xmlhttp.onreadystatechange = function() {
                    
                    if (this.readyState == 4 && this.status == 200) {
                        
                        dataPHP = this.responseText;

                        try {
                            
                            dataPHP = JSON.parse(dataPHP);

                            counter = 0;

                            lenSense = dataPHP.results["0"].lexicalEntries[0].entries[0].senses.length;

                            lexSense = dataPHP.results["0"].lexicalEntries.length;

                            document.getElementById("txtHint").innerHTML = '<b>' + str.toLowerCase() + '</b> ';
                            
                            for (var i = 0; i < lexSense; i++) {
                                
                                lenSense = dataPHP.results["0"].lexicalEntries[i].entries[0].senses.length;
                                
                                for (var z = 0; z < lenSense; z++) {
                                    
                                    if (dataPHP.results["0"].lexicalEntries[i].entries["0"].hasOwnProperty('senses')) {
                                        
                                        counter++;
                                        
                                        document.getElementById("txtHint").innerHTML += ' <i>n.</i><b>' + (counter) + '</b> (<i>' + dataPHP.results["0"].lexicalEntries[i].lexicalCategory + '</i>) ' + dataPHP.results["0"].lexicalEntries[i].entries["0"].senses[z].definitions;
                                        
                                    }
                                    if (lng === 'es') {
                                        
                                        $("#btnAudio").hide();

                                    } else {

                                        $("#btnAudio").show();

                                    }
                                }
                            }


                            document.getElementById("btnAudio").disabled = false;

                            $("#panelresp").slideDown();
                            
                            $('.editable').each(function() {
                                
                                this.contentEditable = true;
                                
                            });

                        } catch (err) {

                            document.getElementById("txtHint").innerHTML = 'no result';
                        }


                    }
                };

                xmlhttp.open("GET", "api.php?word=" + (str.toLowerCase()).normalize('NFD').replace(/[\u0300-\u036f]/g, "") + "&lng=" + lng, true);
                
                xmlhttp.send();
                
                document.getElementById("wordinput").value = "";
            }
        }

        function playAudio() {

            document.getElementById("audioPron").src = dataPHP.results["0"].lexicalEntries["0"].pronunciations["0"].audioFile;

            document.getElementById("audioPron").play();
        }

        function changeLng(lngThis) {
            
            lng = lngThis;
            
        }

        $(function() {
            
            $("#panelresp").hide();
            
        });