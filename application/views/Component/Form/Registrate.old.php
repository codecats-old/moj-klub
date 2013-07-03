<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $style=(isset($style)?$style:null);?>
  <form>
        <div <?php echo HTML::attributes($style);?>>
        
            <div class="well">
                <h4>Dane wymagane</h4>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="email">
                            e-mail:
                            <label class="checkbox">
                                <input type="checkbox" checked><small>widoczny publicznie</small>
                            </label>
                        </label>
                        <input name="email" type="email" class="span8" placeholder="email" />
                        <span class="label label-warning">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1</span>
                        <hr>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="username">username:</label>
                        <input name="username" type="text" class="span8" placeholder="nazwa użytkownika" />
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="password">hasło:</label>
                        <input name="password" type="password" class="span8" placeholder="hasło" />
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="password_confirm">hasło potwierdź:</label>
                        <input name="password_confirm" type="password" class="span8" placeholder="hasło - potwierdź" />
                    </div>
                </div>
                <hr>
                <h5>Dane dodatkowe:</h5>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="name">imię:</label>
                        <input name="name" type="text" class="span8" placeholder="Twoje imie" />
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="surname">nazwisko:</label>
                        <input name="surname" type="text" class="span8" placeholder="Twoje nazwisko" />
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="phone">
                            nr telefonu:
                            <label class="checkbox">
                                <input type="checkbox" checked><small>widoczny publicznie</small>
                            </label>
                        </label>
                        <input name="phone" type="text" class="span8" placeholder="Twoj nr telefonu" />
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">Close</a>
            <a  href="#" class="btn btn-primary">Zarejestruj się</a>
        </div>
    </form>
