                                 var swsource = "http://localhost/test1/pwa-sw.js";                                          
                                                                  
			         if("serviceWorker" in navigator) {
                                     window.addEventListener('load', function() {			         		
			                navigator.serviceWorker.register(swsource).then(function(reg){                                                                                        
			                    console.log('Congratulations!!Service Worker Registered ServiceWorker scope: ', reg.scope);
                                                                                                                    
			                }).catch(function(err) {
			                    console.log('ServiceWorker registration failed: ', err);
			                });	
                                                                                                                        
			                let deferredPrompt;                                                                                                                                                                                                                                                                                                                        
			                window.addEventListener('beforeinstallprompt', (e) => {
							  e.preventDefault();
							  deferredPrompt = e;
							  
                                                          deferredPrompt.userChoice
							    .then((choiceResult) => {
							      if (choiceResult.outcome === 'accepted') {
							        console.log('User accepted the prompt');
                                                                document.getElementById("pwaforwp-add-to-home-click").style.display = "none";
							      } else {
							        console.log('User dismissed the prompt');
							      }
							      deferredPrompt = null;
							  });
                                                          
							});			              
							window.addEventListener('appinstalled', (evt) => {
							  app.logEvent('APP not installed', 'installed');
							});
                                                                                                                                                                                                                      
                                                     var lastScrollTop = 0;                                        
                              window.addEventListener("scroll", (evt) => {
                                var st = document.documentElement.scrollTop;                                                                                                                
                                    if (st > lastScrollTop){
                                       if(deferredPrompt !=null){
                                       var a2hsdesk = document.getElementById("pwaforwp-add-to-home-click");
                                    if(a2hsdesk !== null){
                                        a2hsdesk.style.display = "block";
                                    }                                                                 
                                       }                                              
                                    } else {
                                    var bhidescroll = document.getElementById("pwaforwp-add-to-home-click");
                                    if(bhidescroll !== null){
                                    bhidescroll.style.display = "none";
                                    }                                              
                                    }
                                 lastScrollTop = st;  
                                });
                                
                              var addtohomeBtn = document.getElementById("pwaforwp-add-to-home-click");	
                                if(addtohomeBtn !==null){
                                    addtohomeBtn.addEventListener("click", (e) => {
                                    addToHome();	
                                });
                                }                                                         
                                                     
                                                     function addToHome(){
                                                 deferredPrompt.prompt();							  
					  deferredPrompt.userChoice
					    .then((choiceResult) => {
					      if (choiceResult.outcome === "accepted") {
					        console.log("User accepted the prompt");
                                                        document.getElementById("pwaforwp-add-to-home-click").style.display = "none";
					      } else {
					        console.log("User dismissed the prompt");
					      }
					      deferredPrompt = null;
					  });
                                             }                                                      
                                                     });
			                             }  
                                                     
                                                     