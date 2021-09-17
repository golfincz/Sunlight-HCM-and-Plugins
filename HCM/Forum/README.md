# Sunlight HCM and Plugins
<strong>Vícevrstvé Fórum pro Sunlight CMS v. 8</strong>
<hr>

Především děkuji autorovi SunLight CMS. Tyto HCM moduly jsou vlastně předělaný HCM recentpos a Levelcontent, za což patří díky Pavlovi Batečkovi (ShiraNai7 - http://sunlight.shira.cz/ ) a Jirkovi Daňkovi ( https://jdanek.eu/ ).

Vícevrstvé foru je vlastně klasické forum, kdy si vytvoříte více zanoření. Mohla by k tomu posloužit skupina a také to s ní funguje. Ale pro skupinu je jiné stylování css. tak jsem to pojmul následovně. Vytvoříme první stránku Fora jako sekci. Pod ní vytvoříme jednotlivá vlákna jako fora. Pokud chceme, abychom měli třetí vrstvu fora, k těmto jednotlivým vláknům vytvoříme opět stránku jako sekci. a pod ní vytvíříme další fora. Takto by to mohlo jít dál do hloubky. Je na vás, jak to pojmete.

K tomuto účelu jsem vytvořil tři HCM moduly, které umožní vidět pár prvků, které se mohou hodit.
<ul>
   <li>g_forumlist.php<br><small>g_forumlist vypíše poslední příspěvky v počtu, který zadáte. Hodí se umístit na stránky - sekce. Je možné zadat parametry podobně jako v recentpos.</li>
   <li>g_last.php<br><small>g_last vypíše poslední nejnovější příspěvek. Umístění v tabulce fora na stránkách - sekce. Opět lze zadat parametry podobně, jako v recentpos, určit ze kterých for má hledat údaje.</li>
   <li>g_forum_by_level.php<br><small>g_forum_by_level vypíše tabulku fora, kterou máte ošetřenou level přístupem. Zatím není hotové načítání posledního příspěvku (g_last).</li>
</ul>

Pro lepší pochopení uvádím obrázky a example kod pro obsah stránek - sekce.

<ul>
   <li><img src='https://raw.githubusercontent.com/golfincz/Sunlight-HCM-and-Plugins/HCM/HCM/Forum/forum_admin.png' alt='Admin část' /></li>
   <li><img src='https://raw.githubusercontent.com/golfincz/Sunlight-HCM-and-Plugins/HCM/HCM/Forum/forum_public.png' alt='Veřejná část' /></li>
   <li>https://github.com/golfincz/Sunlight-HCM-and-Plugins/blob/HCM/HCM/Forum/example_sekce_forum_kod.html</li>
</ul>
