<!DOCTYPE html>
<html>
    <head>
        <title>ホテルズワーク管理 | 求人情報管理</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/job_regist_img.css" rel="stylesheet" type="text/css"/>

        <script src="js/vender/jquery.js" type="text/javascript"></script>
        <link href="js/vender/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <script src="js/vender/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <header class="header">
            <div class="MenuContainer">
                <input id="menu" type="checkbox" name="menu" class="HiddenCheckbox"/>
                <label for="menu" class="MenuIcon"></label>
                <h2 class="MenuHeader">Menu</h2>
                <nav class="Menu">
                    <ul class="Menu-list">
                        <li class="Menu-item"><a href="./index.html" class="Menu-link">管理ツールTOP</a></li>
                        <li class="Menu-item"><a href="./job_search_admin.php" class="Menu-link">求人情報管理</a></li>
                        <li class="Menu-item"><a href="./recommend_admin.html" class="Menu-link">お勧めの仕事管理</a></li>
                        <li class="Menu-item"><a href="./keyword_admin.html" class="Menu-link">キーワード設定</a></li>
                        <li class="Menu-item"><a href="./special_admin.php" class="Menu-link">特集管理</a></li>
                        <li class="Menu-item"><a href="./special_top.html" class="Menu-link">特集表示設定</a></li>
                    </ul>
                </nav>
            </div>
            <h2 class="topText">
                <a href="./index.html" class="linkTop">ホテルズワーク管理</a> <span class="topTextSep">|</span> <span class="topToolName">求人情報管理</span>
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                <div class="main">
                    <div>{$jobInfo.title}</div>
                    <form action="/admin/ajax/ajax_image_upload.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="jsJid" name="jid" value="{$jobId}">
                        <h3>基本の画像</h3>
                        <ul class="cadminTable">
                            <!--画像の登録ここから-->
                            <li>
                                <div class="th">
                                    <div class="thL">
                                        メイン画像1
                                    </div>
                                    <div class="thR"></div>
                                </div>
                                <div class="td">
                                    <div class="tdBox">
                                        <div class="tdBoxL">
                                            <div class="dragArea jsDragImg0">
                                                <div class="fileSelectBtnGroup">
                                                    <span id="img0">
                                                    <input type="file" name="img0">
                                                    </span>
                                                    <button type="button" class="btnFileSelect jsFileSelectImg0">ファイルを選択</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tdBoxC">
                                            <div>選択中の画像:</div>
                                            <div class="imgFileName0"></div>
                                            <div class="btnBox"><button type="button" class="btnCancel jsCancelImg0" onclick="fileCancel(0);">選択をキャンセル</button></div>
                                        </div>
                                        <div class="tdBoxR">
                                            <div>登録済みの画像:</div>
                                            {if $imgFile.0}
                                            <div><img src="{$imgFile.0.fileName}" width="200" height="200" alt=""></div>
                                            {else}
                                            <div><img src="/admin/img/no_image_square.jpg" width="200" height="200" alt=""></div>
                                            {/if}
                                            <div><input type="checkbox" name="delete0" id="delete0" value="1" style="width:20px;height:20px; vertical-align: middle; margin:5px;"><label for="delete0">画像を完全に削除する</label></div>
                                        </div>
                                    </div>
                                    <div class="tdLower">
 
                                    </div>
                                </div>
                            </li>
                            <!--画像の登録ここまで-->
                            <!--画像の登録ここから-->
                            <li>
                                <div class="th">
                                    <div class="thL">
                                        メイン画像2
                                    </div>
                                    <div class="thR"></div>
                                </div>
                                <div class="td">
                                    <div class="tdBox">
                                        <div class="tdBoxL">
                                            <div class="dragArea jsDragImg1">
                                                <div class="fileSelectBtnGroup">
                                                    <span id="img1">
                                                    <input type="file" name="img1">
                                                    </span>
                                                    <button type="button" class="btnFileSelect jsFileSelectImg1">ファイルを選択</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tdBoxC">
                                            <div>選択中の画像:</div>
                                            <div class="imgFileName1"></div>
                                            <div class="btnBox"><button type="button" class="btnCancel jsCancelImg1" onclick="fileCancel(1);">選択をキャンセル</button></div>
                                        </div>
                                        <div class="tdBoxR">
                                            <div>登録済みの画像:</div>
                                            {if $imgFile.1}
                                            <div><img src="{$imgFile.1.fileName}" width="200" height="200" alt=""></div>
                                            {else}
                                            <div><img src="/admin/img/no_image_square.jpg" width="200" height="200" alt=""></div>
                                            {/if}
                                            <div><input type="checkbox" name="delete1" id="delete1" value="1" style="width:20px;height:20px; vertical-align: middle; margin:5px;"><label for="delete1">画像を完全に削除する</label></div>
                                        </div>
                                    </div>
                                    <div class="tdLower">
 
                                    </div>
                                </div>
                            </li>
                            <!--画像の登録ここまで-->
                        </ul>

                        <h3>フォトギャラリー</h3>

                        <ul class="cadminTable">
                            <!--画像の登録ここから-->

                            <li>
                                <div class="th">
                                    <div class="thL">
                                        画像1
                                    </div>
                                    <div class="thR"></div>
                                </div>
                                <div class="td">
                                    <div class="tdBox">
                                        <div class="tdBoxL">
                                            <div class="dragArea jsDragImg2">
                                                <div class="fileSelectBtnGroup">
                                                    <span id="img2">
                                                    <input type="file" name="img2">
                                                    </span>
                                                    <button  type="button" class="btnFileSelect jsFileSelectImg2">ファイルを選択</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tdBoxC">
                                            <div>選択中の画像:</div>
                                            <div class="imgFileName2"></div>
                                            <div class="btnBox"><button type="button" class="btnCancel jsCancelImg2" onclick="fileCancel(2);">選択をキャンセル</button></div>
                                        </div>
                                        <div class="tdBoxR">
                                            <div>登録済みの画像:</div>
                                            {if $imgFile.2}
                                            <div><img src="{$imgFile.2.fileName}" width="200" height="200" alt=""></div>
                                            {else}
                                            <div><img src="/admin/img/no_image_square.jpg" width="200" height="200" alt=""></div>
                                            {/if}
                                            <div><input type="checkbox" name="delete2"  value="1" id="delete2" style="width:20px;height:20px; vertical-align: middle; margin:5px;"><label for="delete2">画像を完全に削除する</label></div>
                                        </div>
                                    </div>
                                    <div class="tdLower">
                                        コメント: 
                                        <input type="text" name="imgComment2" class="jsImgComment2" value="{$jobInfo.img2_comment}" placeholder="例：">
                                        文字数：<span class=" minusCount jsCtImgComment2">20</span>/20
                                    </div>
                                </div>

                            </li>
                            <!--画像の登録ここまで-->
                            <!--画像の登録ここから-->

                            <li>
                                <div class="th">
                                    <div class="thL">
                                        画像2
                                    </div>
                                    <div class="thR"></div>
                                </div>
                                <div class="td">
                                    <div class="tdBox">
                                        <div class="tdBoxL">
                                            <div class="dragArea jsDragImg3">
                                                <div class="fileSelectBtnGroup">
                                                    <span id="img3">
                                                    <input type="file" name="img3">
                                                    </span>
                                                    <button type="button" class="btnFileSelect jsFileSelectImg3">ファイルを選択</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tdBoxC">
                                            <div>選択中の画像:</div>
                                            <div class="imgFileName3"></div>
                                            <div class="btnBox"><button type="button" class="btnCancel jsCancelImg3" onclick="fileCancel(3);">選択をキャンセル</button></div>
                                        </div>
                                        <div class="tdBoxR">
                                            <div>登録済みの画像:</div>
                                            {if $imgFile.3}
                                            <div><img src="{$imgFile.3.fileName}" width="200" height="200" alt=""></div>
                                            {else}
                                            <div><img src="/admin/img/no_image_square.jpg" width="200" height="200" alt=""></div>
                                            {/if}
                                            <div><input type="checkbox" name="delete3" value="1" id="delete3" style="width:20px;height:20px; vertical-align: middle; margin:5px;"><label for="delete3">画像を完全に削除する</label></div>
                                        </div>
                                    </div>
                                    <div class="tdLower">
                                        コメント: 
                                        <input type="text" name="imgComment3" class="jsImgComment3"  value="{$jobInfo.img3_comment}" placeholder="例：">
                                        文字数：<span class=" minusCount jsCtImgComment3">20</span>/20
                                    </div>
                                </div>
                            </li>
                            <!--画像の登録ここまで-->
                            <!--画像の登録ここから-->

                            <li>
                                <div class="th">
                                    <div class="thL">
                                        画像3
                                    </div>
                                    <div class="thR"></div>
                                </div>
                                <div class="td">
                                    <div class="tdBox">
                                        <div class="tdBoxL">
                                            <div class="dragArea jsDragImg4">
                                                <div class="fileSelectBtnGroup">
                                                    <span id="img4">
                                                    <input type="file" name="img4">
                                                    </span>
                                                    <button type="button" class="btnFileSelect jsFileSelectImg4">ファイルを選択</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tdBoxC">
                                            <div>選択中の画像:</div>
                                            <div class="imgFileName4"></div>
                                            <div class="btnBox"><button type="button" class="btnCancel jsCancelImg4" onclick="fileCancel(4);">選択をキャンセル</button></div>
                                        </div>
                                        <div class="tdBoxR">
                                            <div>登録済みの画像:</div>
                                            {if $imgFile.4}
                                            <div><img src="{$imgFile.4.fileName}" width="200" height="200" alt=""></div>
                                            {else}
                                            <div><img src="/admin/img/no_image_square.jpg" width="200" height="200" alt=""></div>
                                            {/if}
                                            <div><input type="checkbox" name="delete4" value="1" id="delete4" style="width:20px;height:20px; vertical-align: middle; margin:5px;"><label for="delete4">画像を完全に削除する</label></div>
                                        </div>
                                    </div>
                                    <div class="tdLower">
                                        コメント: 
                                        <input type="text" name="imgComment4" class="jsImgComment4"  value="{$jobInfo.img4_comment}" placeholder="例：">
                                        文字数：<span class=" minusCount jsCtImgComment4">20</span>/20
                                    </div>
                                </div>
                            </li>
                            <!--画像の登録ここまで-->
                        </ul>


                        <!--一時保存やプレビューボタンここから--><!--一時保存やプレビューボタンここまで-->



                        <!--一goback-->
                        <div class="gobackBoxArea">
                            <div class="btBox">

                                <div class="btBoxL">
                                    <button type="button" class="jsBack">閉じる</button>
                                </div>

                                <div class="btBoxR">
                                    <button type="button" class="jsRegistBtn">登録する</button>
                                </div>
                            </div>
                        </div>
                        <!--一時保存やプレビューボタンここまで-->
                    </form>
                </div>
            </div>
        </div>
        <script src="js/admin.js" type="text/javascript"></script>
        <script src="js/validation.js"></script>
        <script src="js/job_regist_img.js" type="text/javascript"></script>
    </body>  
</html>
