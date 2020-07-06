<main class="w-100 d-flex flex-column">

    <header class="position-fixed" style="width: inherit; background-color: #F1F3F6">
        <article class="container d-flex flex-column pl-5 pr-5 pt-4 pb-4" style="max-width:inherit;">

            <div class="d-flex align-itens-center justify-content-between row">

                    <div class="d-flex flex-column col-8">
                        <div>
                            <h1 class="font-weight-bold display-3 text-azul-aplans">Outdoor Cinema</h1>
                        </div>

                        <div>
                            <h2 class="text-secondary">10 pm, august 4, 2020</h2>
                        </div>
                        <div class="text-left mt-4 mb-4 d-flex">
                            <span class="pl-4 pr-4 pt-2 pb-2" style="font-size: 2rem; background-color: rgba(109, 63, 230, 0.2); border-radius: 20px; color: #6F41E9; font-weight: 500;">Organizador</span>
                            <div class="pl-4 d-flex align-items-center">
                                <img style="width: 3rem; height:3rem" src="images/settings/gear.png">
                            </div>   
                        </div>
                        <div>
                            <button type="button" class="botaoParticipar">Participar</button>
                            <button type="button" class="botaoAbandonar">Abandonar</button>
                        </div>    	
                    </div>
               
                
                    <div class="col-4 d-flex flex-column" style="height:100%; align-items: flex-end;"> 
                        <div class="avatar-circular">
                            <img class="mw-100" src="assets/avatar.png" alt="avatar">
                        </div>  
                    </div>

                    
            </div>
            

        </article>
        <button class="tablink" style="font-size:3rem;" onclick="openPage('Main', this)" id="defaultOpen">Home</button>
        <button class="tablink" style="font-size:3rem;" onclick="openPage('People', this)">Pessoas</button>
        <button class="tablink" style="font-size:3rem;" onclick="openPage('Tasks', this)">Tarefas</button>
        <button class="tablink" style="font-size:3rem;" onclick="openPage('Chat', this)">Chat</button>

    </header>



    <div class="w-100 h-100 pl-4 pr-4" style="margin-top: 28rem;">

        <div id="Main" class="tabcontent">
            <h1 class="display-3 font-weight-bold mt-4 ml-4">Descrição</h1>
            <p class="descricaoFont pt-4 pl-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo qui voluptatum maiores debitis vel maxime architecto beatae dolorum, assumenda ab! Suscipit saepe qui soluta nemo sint praesentium doloremque provident dicta.</p>

            <div class="pl-4 pt-4 marginT">

                <p class="descricaoFont font-weight-bold">Participantes</p>

                <div id="myProgress1">
                    <div id="myBar1"></div>
                </div>

            </div>

            <div class="container-fluid pl-4 pt-4">

                <div class="row">

                    <div class="col-6">
                        <h2 class="pt-2 font-weight-bold" style="color:grey;">8/10</h2>
                    </div>
                    <div class="col-6 text-right">
                        <a href="#" class="pt-3 font-weight-bold" style="font-size: 2rem;text-decoration: none;color:grey;font-style:bold;">Ver mais +</a>
                    </div>

                </div>

            </div>

            <div class=" pl-4 pt-4 marginT">
                <p class="descricaoFont font-weight-bold">Tarefas Restantes</p>
            </div>

            <div class="container-fluid ml-3 pl-4 pt-4">
                <div class="row">
                    <div class="col-6 mainTasks">
                        <h1 class="pt-4 pb-1">Projetor</h1>
                        <h1 class="pb-4 text-muted">Trazer o projector man</h1>
                    </div>

                    <div class="col-6">
                        <div class="form-check selectMargin">
                            <input class="selectSize" type="checkbox" value="" id="defaultCheck1">
                        </div>

                    </div>
                </div>
            </div>

          


        </div>

        <div id="People" class="tabcontent">
            <div class="row mt-4">
                <h1 class="col-5 display-4 font-weight-bold mt-4 ml-4">4 participants</h1>
                <div class="p-3 d-flex align-items-center ml-auto mr-5">
                    <button type="button" class="p-1" style="border: 2px; border-style: dashed; border-color: #6F41E9; border-radius: 20px; font-size: 1rem; width: 5rem; height: 5rem;"><img src="images/people/plus.png" width="25" height="25"></button>
                </div>
            </div>

            <div class="row mb-4 pt-3 pb-3">
                <div class="pl-0 pt-2 pb-4 pr-0 ml-5 d-flex align-items-center col-2">
                    <div class=" avatar-circular">
                        <img src="images/people/avatar1.jpg">
                    </div>

                </div>

                <div class="pl-3 d-flex align-items-center col-9">
                    <div class="row">
                        <div class="col-12 pr-0">
                            <span class="display-4 font-weight-normal">Miguel Costa</span>
                            <span class="ml-3 pl-3 pr-3 pt-1 pb-1" style="font-size: 2rem; background-color: rgba(109, 63, 230, 0.2); border-radius: 20px; color: #6F41E9; font-weight: 500;">Organizador</span>
                        </div>
                        <h1 class="col-12 display-6 font-weight-light" style="margin-bottom: 8px;">Popcorn Dealer</h1>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mb-4 pt-3 pb-3">
                <div class="pl-0 pt-2 pb-4 pr-0 ml-5 d-flex align-items-center col-2">
                    <div class=" avatar-circular">
                        <img src="images/people/avatar2.jpg">
                    </div>

                </div>

                <div class="pl-3 d-flex align-items-center col-6">
                    <div class="row">
                        <div class="col-12 pr-0">
                            <span class="display-4 font-weight-normal">José Marques</span>
                        </div>
                        <h1 class="col-12 display-6 font-weight-light" style="margin-bottom: 8px;">Projector Owner</h1>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mb-4 pt-3 pb-3">
                <div class="pl-0 pt-2 pb-4 pr-0 ml-5 d-flex align-items-center col-2">
                    <div class=" avatar-circular">
                        <img src="images/people/avatar3.jpg">
                    </div>

                </div>

                <div class="pl-3 d-flex align-items-center col-6">
                    <div class="row">
                        <div class="col-12 pr-0">
                            <span class="display-4 font-weight-normal">Pedro Matias</span>
                        </div>
                        <h1 class="col-12 display-6 font-weight-light" style="margin-bottom: 8px;">Snack Man</h1>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mb-4 pt-3 pb-3">
                <div class="pl-0 pt-2 pb-4 pr-0 ml-5 d-flex align-items-center col-2">
                    <div class=" avatar-circular">
                        <img src="images/people/avatar4.jpg">
                    </div>

                </div>

                <div class="pl-3 d-flex align-items-center col-6">
                    <div class="row">
                        <div class="col-12 pr-0">
                            <span class="display-4 font-weight-normal">Diana Sofia</span>
                        </div>
                        <h1 class="col-12 display-6 font-weight-light" style="margin-bottom: 8px;">The Critic</h1>
                    </div>
                </div>
            </div>

            <hr>

            <div class="p-3 d-flex align-items-center justify-content-center ml-auto mr-5">
                <button type="button" class="p-1" style="border: 2px; border-style: dashed; border-color: #6F41E9; border-radius: 20px; font-size: 2rem; width: 20rem; height: 5rem; color:#6F41E9;">Invite Friends <img src="images/people/plus.png" class="pl-2 pb-2" width="35" height="35"></button>
            </div>


        </div>

        <div id="Tasks" class="tabcontent">
            <div class="row mt-4">
                <h1 class="col-5 display-4 font-weight-bold mt-4 ml-4">6 Tasks</h1>
                <div class="p-3 d-flex align-items-center ml-auto mr-5">
                    <button type="button" class="p-1" style="border: 2px; border-style: dashed; border-color: #6F41E9; border-radius: 20px; font-size: 1rem; width: 5rem; height: 5rem;"><img src="images/people/plus.png" width="25" height="25"></button>
                </div>
            </div>


            <div class="container-fluid ml-3 pl-4 pt-4 mb-5">
                <div class="row">
                    <div class="col-6 mainTasks">
                        <h1 class="pt-4 pb-1">Projetor</h1>
                        <h1 class="pb-4 text-muted">Trazer o projector man</h1>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div id="Chat" class="tabcontent container-fluid pt-0">

        <ul class="container-fluid">
            <div class="row mt-4 d-flex align-items-center">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="images/people/avatar4.jpg">
                </div>
                <li class="him">Como é que estão todos?</li>
            </div>

            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">Pronto para a festa!</li>
            </div>

            <div class="row mt-4 d-flex align-items-center">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="images/people/avatar3.jpg">
                </div>
                <li class="him">Qual é o filme? Tenho uma sugestão!</li>
            </div>

            <div class="row mt-4 d-flex align-items-center">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="images/people/avatar2.jpg">
                </div>
                <li class="him">Pipocas Doces ou Salgadas</li>
            </div>

            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">Pipocas doces FOSHOU</li>
            </div>

            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>

            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>

            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>

            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>

            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>

            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>
            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>
            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>
            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>
            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>
            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>
            <div class="row mt-4 d-flex align-items-center flex-row-reverse">
                <div class=" avatar-circular ml-3 mr-4">
                    <img src="assets/avatar.png">
                </div>
                <li class="me">LMAO</li>
            </div>




        </ul>

        <div style="position: relative; bottom: 0; width: 100%;">
            <hr>

            <div class="p-3 d-flex align-items-center justify-content-left ml-auto mr-5">
                <input type="text" placeholder="Escreve algo" class="p-1" style="border: none; border-radius: 20px; font-size: 2rem; width: 60rem; height: 5rem;">
            </div>
        </div>
    </div>

    </div>

</main>