<?=$render('header', ['loggedUser' => $loggedUser]);?>

<section class="container main">    
    <?=$render('sidebar', ['activeMenu'=>'config', 'countFriends' => '33']);?>
    <section class="feed mt-10">
        <form class="config-form" method="POST" enctype="multipart/form-data" action="<?=$base;?>/config">            
            <label>
               Novo Avatar:<br/>
               <input type="file" name="avatar"/> <br/>
                
            </label>
            
            <label >
                Nova Capa: <br/>
                <input type="file" name="cover"/>
            </label>

            <hr/>

            <label >
                Nome completo: <br/>
                <input type="text" name="name" value="<?=$user->name;?>"/>
            </label>
            <label >
                Data de Nascimento: <br/>
                <input type="text" name="birthdate" value="<?=date('d/m/Y', strtotime($user->birthdate) );?>"/>
            </label>
            <label >
                E-mail: <br/>
                <input type="text" name="email" value="<?=$user->email;?>"/>
            </label>
            <label >
                cidade <br/>
                <input type="text" name="city" value="<?=$user->city;?>"/>
            </label>
            <label >
                Trabalho: <br/>
                <input type="text" name="work" value="<?=$user->work;?>"/>
            </label>
            <hr/>
            <label >
                Nova Senha: <br/>
                <input type="password" name="new-password" value=""/>
            </label>
            <label >
                Confirmar Senha: <br/>
                <input type="password" name="confirm-password" value=""/>
            </label>

            <input class="button" type="button" value="Salvar">
        </form>
    </section>
</section>

<?=$render('footer');?>