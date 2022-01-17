<?php 
    View::setTitle('Donner à un événement');
?>

<section class="lead">
    <h1 class="font-hero slide-in-bottom-h1">Faire une donation</h1>

    <div class="glass fade-in" style="margin-top: 2rem">
            <form action="<?= BASE_PATH . '/event/donate/' . $params['event']->getId(); ?>" method="POST">
                <h3 class="font-hero"> <?= $params['event']->getName(); ?> </h3>
                <div class="input-tip">
                    <div style="fill: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.667 13.984c1.782 0 3.333-.671 3.333-1.5s-1.552-1.5-3.333-1.5c-1.781 0-3.333.671-3.333 1.5s1.551 1.5 3.333 1.5zm.062-1.339c-.199-.06-.81-.111-.81-.45 0-.189.223-.358.639-.396v-.148h.214v.141c.156.004.33.021.523.06l-.078.229c-.147-.034-.311-.066-.472-.066l-.048.001c-.321.013-.347.191-.125.267.364.112.844.195.844.493 0 .238-.289.366-.645.397v.146h-.214v-.139c-.22-.002-.451-.038-.642-.102l.098-.229c.163.042.367.084.552.084l.139-.01c.247-.034.296-.2.025-.278zm-.062 5.339c1.261 0 2.57-.323 3.333-.934v.434c0 .829-1.552 1.516-3.333 1.516-1.781 0-3.333-.687-3.333-1.516v-.434c.763.612 2.071.934 3.333.934zm0-3.333c1.261 0 2.57-.323 3.333-.934v.434c0 .829-1.552 1.5-3.333 1.5-1.781 0-3.333-.671-3.333-1.5v-.434c.763.611 2.071.934 3.333.934zm0 1.667c1.261 0 2.57-.323 3.333-.935v.435c0 .828-1.552 1.5-3.333 1.5-1.781 0-3.333-.672-3.333-1.5v-.435c.763.612 2.071.935 3.333.935zm-8.441-3.089c0 .601-.47.922-1.05 1.002v.369h-.351v-.35c-.362-.006-.737-.092-1.05-.254l.16-.575c.334.129.78.267 1.128.189.402-.091.485-.505.041-.705-.326-.15-1.323-.281-1.323-1.134 0-.477.363-.904 1.044-.998v-.373h.351v.356c.253.006.538.051.855.147l-.127.576c-.269-.094-.566-.18-.855-.162-.521.031-.567.482-.204.671.599.282 1.381.491 1.381 1.241zm5.774-7.229h-17v10h-1v-11h18v1zm-16 1v11h14v-5.516c0-1.792 1.985-2.71 4-2.875v-2.609h-18zm9 9c-1.933 0-3.5-1.567-3.5-3.5s1.567-3.5 3.5-3.5 3.5 1.567 3.5 3.5-1.567 3.5-3.5 3.5z"></path></svg>
                    </div>
                    <input class="w-full glass text-gray-less" type="number" name="amount" id="amount" aria-label="Votre montant" placeholder="Votre montant" required />
                </div>

                <div class="input-group">
                    <input class="w-full glass text-gray-less" type="text" name="comment" id="comment" aria-label="Commentaire (falcutatif)" placeholder="Commentaire (falcutatif)" pattern=".{3,}" />

                <div class="horizontal justify-start" style="gap: 1rem">
                    <input type="submit" class="btn slide-in-bottom" value="Envoyer" />
                </div>
            </form>
    </div>
</section>