<?php
use yii\helpers\Html;
use yii\bootstrap\Modal;
?>
<h3>题目内容</h3>
<p>
    题目需包含：标题、描述、输入描述、输出描述、样例输入、样例输出、样例解释或提示信息（可选）、测试数据。
</p>
<p>
    有需要的应该写个暴力，且拿暴力跟标程对拍。
</p>

<h3>题目的测试数据文件要求</h3>
<ol>
    <li>数据文件包含输入文件，输出文件。就算题目无输入要求，也应包含一个空的输入文件(注：因上传组件空文件空文件无法上传，如无输入要求，需在空文件里随便打几个空格才能把文件上传)。</li>
    <li>输入输出的文件名称必须一一对应，只是后缀不同。<b>输入文件的后缀为 `in`</b>，输出文件的后缀为 `out`。举例：输入文件文件全名为 `1.in`，则对应输出文件的文件全名必须为 `1.out`</li>
    <li>题目的测试数据中<b>必须包括各种各样的数据</b>，而且应该有各种各样的达到最小数据范围的数据和达到最大数据范围的数据。
        也就是说如果1 ≤ n ≤ 100000，那么数据中既应该有 n = 1，也应该有 n = 100000。</li>
    <li> 一个文件对(即输入文件与对应的输出文件)称为一个测试点，测试点可以有多个。程序运行时间的计算结果为所有测试点中，单个测试点所需时间的最大值。</li>
    <li>不建议要求采用“输入 t, 表示 t 组数据”之类的题面，建议一个测试点一组样例，即类似于 CF 或者 World Final 那样题面即可。
        为保证能够完整测试程序，建议测试点在 30 左右（此处测试点数量不是强制要求，<b>但必须根据题目具体内容来合理选择测试点的数量。必须包括各种各样的数据。</b>），如无法满足测试，则应控制在 150 以内。
    </li>
    <li>
        <b>测试数据不应完全依赖于程序随机生成，最好人为考虑各种不同的情况，针对各种情况出数据。</b>
    </li>
</ol>

<h3>题面规范</h3>
<blockquote>
    一个好的题目或者好的比赛都会遵循一定的规则。为规范题目形式，特制定本规则。
</blockquote>
<ol>
    <li>题面必须清晰好懂，没有语法错误。</li>
    <li><b>题目背景中不要写数据范围，全部都要写在输入格式里。</b></li>
    <li><b>必须写明所提到的所有变量的范围。范围描述应当使用 ≤，而不是 ＜</b>。如果提到一个字符串，必须写明哪些字符可以出现在这个字符串内。</li>
    <li>题目中描述数组下标最好从 1 开始。</li>
    <li>如果是中文题面的题目，请正确使用标点符号，不要混用中英文标点(中文应使用全角，英文应使用半角)。</li>
    <li>OJ 支持 Katex 语法。题目出现的<b>所有变量名必须 Katex 语法来包含，数据范围的描述也用 Katex 来写。</b>参考下文题目规范示例。
        <blockquote>
            <p>说明：Katex 是用来在网页上展示漂亮的数学公式。Katex 语法参考：<a href="https://katex.org/docs/supported.html">Katex Supported Functions</a></p>
            <p>在 Katex 中，使用 $ 符号包含的为行内公式，使用 $$ 符号包含的为单行公式（即这个公式会占据一整行，并居中显示）。</p>
        </blockquote>
    </li>
    <li>如果是中文题面，<b>出现的变量或者英文要与中文之间要有一个空格</b>
        <blockquote>
            <p>正确示范：<b>在 Shiyang 手上，有 $n$ 个苹果</b>。</p>
            <p>错误示范 1：<b>在Shiyang手上，有$n$个苹果</b>。</p>
            <p>错误示范 2：<b>有$ n $个苹果</b>。</p>
            <p>说明：添加空格有利于阅读，注意对比示范中空格出现的位置，此处 n 是一个变量，参照第６条规则，用$符号包含表明这是个变量。</p>
        </blockquote>
    </li>
    <li>不建议在中文题面中用英文名、汉语拼音、人物名字汉语拼音的缩写（此处只是不建议，非强制约束。如需使用英文名，建议使用某队员的网络英文ID）。
        人物取名建议优先考虑人物的外号。</li>
</ol>
<h3>题面规范示例及效果图</h3>
<blockquote>
    点击图片可查看高清大图。
</blockquote>
<div class="row">
    <div class="col-md-6">
        <a href="<?= Yii::getAlias('@web') ?>/images/problem_edit.png" target="_blank">
            <img src="<?= Yii::getAlias('@web') ?>/images/problem_edit.png" align="problem edit" width="100%">
        </a>
    </div>
    <div class="col-md-6">
        <a href="<?= Yii::getAlias('@web') ?>/images/problem_preview.png" target="_blank">
            <img src="<?= Yii::getAlias('@web') ?>/images/problem_preview.png" align="problem edit" width="100%">
        </a>
    </div>
</div>

<h3>Special Judge</h3>
<p>简称 SPJ，这是针对用户输出的特判。比如，根据题面求解出来的答案可能存在多个，这样就无法定义一个准确的输出文件来判断用户是否正确，这时就需要 SPJ。或者允许用户的输出在某一精度范围内是正确的。</p>
<?php Modal::begin([
    'header' => '<h2>SPJ 模板示例</h2>',
    'toggleButton' => ['label' => 'SPJ 模板示例', 'class' => 'btn btn-success'],
]) ?>
<div class="pre"><p>#include &lt;stdio.h&gt;

#define AC 0
#define WA 1
#define ERROR -1

int spj(FILE *input, FILE *user_output){
    /*
      parameter:
        - input，your input file pointer
        - user_output，user output file pointer
      return:
        - if the answer is correct, return AC else return WA
        - if something unexpected happened in your judge function, you can return ERROR

      demo:

      int a, b;
      while(fscanf(user_output, "%d %d", &a, &b) != EOF){
          if(a -b != 3){
              return WA;
          }
      }
      return AC;
     */
}

void close_file(FILE *f){
    if(f != NULL){
        fclose(f);
    }
}

int main(int argc, char *args[]){
    FILE *input = NULL, *user_output = NULL;
    int result;
    if(argc != 4){
        printf("Usage: spj x.in x.out\n");
        return ERROR;
    }
    input = fopen(args[1], "r");
    user_output = fopen(args[2], "r");
    if(input == NULL || user_output == NULL){
        printf("Failed to open output file\n");
        close_file(input);
        close_file(user_output);
        return ERROR;
    }

    result = spj(input, user_output);
    printf("result: %d\n", result);

    close_file(input);
    close_file(user_output);
    return result;
}
</p></div>
<?php Modal::end() ?>


<h3 id="infile">如何快速生成输入文件</h3>
<p>以下只是提供 C 语言一种示范，<b>数据请勿完全依赖随机生成，应根据题目要求考虑不同情况设定数据，同时应包含题面各个范围的数据情况。</b></p>
    <div class="pre"><p>#include &lt;bits/stdc++.h&gt;
int main()
{
    // 生成 20 组数据
    for (int test = 1; test <= 30; test++) {
        char name[100];
        sprintf(name, "%d.in", test);  // 注意文件名称必须以 in 作为后缀
        FILE * fp = fopen(name, "w");
        int a = rand() % 100 + 1; // 随机生成在一个在 [1, 100]　数
        int b = rand() % 100 + 1;　// 随机生成在一个在 [1, 100]　数
        fprintf(fp, "%d %d\n", a, b);　// 输出到文件中
        fclose(fp);
    }
    return 0;
}
</p></div>

<hr>
<h2>出题请使用：<?= Html::a(Yii::t('app', 'Polygon System'), ['/polygon']) ?></h2>
<p>这是一个出题平台，任何用户都可以在该平台上面创建题目，非管理员用户只能查看自己创建的题目。只有管理员才能将该平台上的题目加入题库中。</p>
<p>你需要准备如下内容：</p>
<ol>
    <li>题目标题</li>
    <li>题目描述</li>
    <li>输入描述</li>
    <li>输出描述</li>
    <li>样例输入（可提供多组）、对应的样例输出</li>
    <li>题目的提示信息（可选）</li>
    <li>测试数据的输入文件</li>
    <li>解决该问题的源程序</li>
</ol>
<p>注：测试数据的输出文件由该平台根据你提供的源程序生成</p>
