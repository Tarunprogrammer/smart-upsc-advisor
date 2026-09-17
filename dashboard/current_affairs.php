<?php
// Mock data for Daily Briefings
$news = [
    ["title" => "New Bill in Parliament", "tag" => "Polity", "summary" => "Analysis of the Data Protection Bill..."],
    ["title" => "RBI Monetary Policy", "tag" => "Economy", "summary" => "Repo rate remains unchanged at 6.5%..."]
];
?>
<div class="p-6">
    <h1 class="text-xl font-bold mb-4">Daily AI-Curated News</h1>
    <?php foreach($news as $item): ?>
        <div class="bg-white p-4 mb-2 border-l-4 border-blue-500 shadow-sm">
            <span class="text-xs font-bold text-blue-500 uppercase"><?php echo $item['tag']; ?></span>
            <h3 class="font-bold"><?php echo $item['title']; ?></h3>
            <p class="text-sm text-gray-500"><?php echo $item['summary']; ?></p>
        </div>
    <?php endforeach; ?>
</div>