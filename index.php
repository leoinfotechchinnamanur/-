<?php
define('AKKUAPPS_LOADED', true);
require_once 'includes/functions.php';
$pageTitle = 'Welcome';
include 'includes/header.php';
?>

<div class="max-w-4xl mx-auto space-y-4">
        <!-- 🔹 SECTION 1: Quick Links (3 Columns, Vertical Style) -->
    <div class="grid md:grid-cols-3 gap-6">
        <a href="/blog" class="neu-card p-6 hover:scale-[1.02] transition block group">
            <div class="text-3xl mb-2 group-hover:scale-110 transition">📚</div>
            <h3 class="font-bold mb-2 group-hover:text-primary-600 transition">Blog</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">Read latest articles & tutorials</p>
        </a>
        
        <a href="/games" class="neu-card p-6 hover:scale-[1.02] transition block group border-2 border-transparent hover:border-yellow-200 dark:hover:border-yellow-800">
            <div class="text-3xl mb-2 group-hover:scale-110 transition">🎮</div>
            <h3 class="font-bold mb-2 group-hover:text-yellow-600 transition">Games</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">Play & earn coins</p>
        </a>
        
        <a href="https://chatbot.akkuapps.in/" target="_blank" class="neu-card p-6 hover:scale-[1.02] transition block group border-2 border-transparent hover:border-indigo-200 dark:hover:border-indigo-800">
            <div class="text-3xl mb-2 group-hover:scale-110 transition">💬</div>
            <h3 class="font-bold mb-2 text-indigo-600 dark:text-indigo-400">AI ChatBots</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">AI Chat Bots Under Construction</p>
        </a>
    </div>
   <!-- ============================================ -->
<!-- 🤖 AKKUCHATBOT STUDIO - FULL FEATURE GRID    -->
<!-- ============================================ -->
<div class="neu-card p-6 mb-6 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 dark:from-indigo-950/30 dark:via-purple-950/30 dark:to-pink-950/30">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
        <div>
            <h3 class="font-bold text-2xl flex items-center gap-2">
                <span class="text-4xl">🤖</span> AkkuChatbot Studio
            </h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                Your complete AI workspace — powered by Leo Infotech
            </p>
        </div>
        <a href="https://chatbot.akkuapps.in/" target="_blank" class="neu-button px-6 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 dark:bg-indigo-700 dark:hover:bg-indigo-800">
            🚀 Open Full Studio
        </a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- 1. Multi-Model AI Chat -->
        <div class="neu-card p-5 hover:scale-[1.02] transition group border-l-4 border-blue-500">
            <div class="text-3xl mb-3">🤖</div>
            <h3 class="font-bold text-lg mb-1">Multi‑Model AI Chat</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Chat with Flux, GPT, and specialized reasoning models. Switch between them seamlessly.</p>
            <?php if (isLoggedIn()): ?>
                <a href="https://chatbot.akkuapps.in/" target="_blank" class="inline-block text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Try Now →</a>
            <?php else: ?>
                <a href="/auth/login.php?redirect=<?php echo urlencode('https://chatbot.akkuapps.in/'); ?>" class="inline-block text-sm font-medium text-gray-500">Login to Access</a>
            <?php endif; ?>
        </div>

        <!-- 2. AI Image Generator -->
        <div class="neu-card p-5 hover:scale-[1.02] transition group border-l-4 border-purple-500">
            <div class="text-3xl mb-3">🎨</div>
            <h3 class="font-bold text-lg mb-1">AI Image Generator</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Generate stunning visuals with Flux models. Supports styles, negative prompts, and various sizes.</p>
            <a href="https://chatbot.akkuapps.in/" target="_blank" class="inline-block text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Generate →</a>
        </div>

        <!-- 3. Pro Image Editor -->
        <div class="neu-card p-5 hover:scale-[1.02] transition group border-l-4 border-pink-500">
            <div class="text-3xl mb-3">✏️</div>
            <h3 class="font-bold text-lg mb-1">Pro Image Editor</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Layers, filters, brushes, shapes, and text. CorelDraw‑style property bar & color palette.</p>
            <a href="https://chatbot.akkuapps.in/ImageEditor" target="_blank" class="inline-block text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Open Editor →</a>
        </div>

        <!-- 4. OCR & Voice Tools -->
        <div class="neu-card p-5 hover:scale-[1.02] transition group border-l-4 border-yellow-500">
            <div class="text-3xl mb-3">🎙️</div>
            <h3 class="font-bold text-lg mb-1">OCR & Voice Tools</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Extract text from image files. Dictate using voice input with multi‑language support.</p>
            <div class="flex gap-2 flex-wrap">
                <a href="https://chatbot.akkuapps.in/ImageToText" target="_blank" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Image to Text</a>
                <span class="text-gray-400">|</span>
                <a href="https://chatbot.akkuapps.in/VoiceToText" target="_blank" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Voice to Text</a>
            </div>
        </div>

        <!-- 5. Workspace & Templates -->
        <div class="neu-card p-5 hover:scale-[1.02] transition group border-l-4 border-green-500">
            <div class="text-3xl mb-3">📂</div>
            <h3 class="font-bold text-lg mb-1">Workspace & Templates</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Browse server files directly in chat. 100+ prompt templates to speed up your workflow.</p>
            <a href="https://chatbot.akkuapps.in/" target="_blank" class="inline-block text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Browse Library →</a>
        </div>

        <!-- 6. Coder & Reasoning Mode -->
        <div class="neu-card p-5 hover:scale-[1.02] transition group border-l-4 border-red-500">
            <div class="text-3xl mb-3">💻</div>
            <h3 class="font-bold text-lg mb-1">Coder & Reasoning Mode</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Get syntax‑highlighted code blocks or step‑by‑step reasoning answers from specialized AI profiles.</p>
            <a href="https://chatbot.akkuapps.in/" target="_blank" class="inline-block text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Try Coder Mode →</a>
        </div>

    </div>
</div>

    <!-- 🔹 SECTION 2: Features Grid (3 Columns, Same Vertical Style) -->
    <div class="grid md:grid-cols-3 gap-6">
        <?php if (isLoggedIn()): ?>
        <a href="/user/dashboard.php" class="neu-card p-6 hover:scale-[1.02] transition block group">
            <div class="text-3xl mb-2 group-hover:scale-110 transition">📝</div>
            <h3 class="font-bold mb-2 group-hover:text-primary-600 transition">Create Posts</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">Share your thoughts</p>
        </a>
        
        <a href="/user/feed.php" class="neu-card p-6 hover:scale-[1.02] transition block group">
            <div class="text-3xl mb-2 group-hover:scale-110 transition">📱</div>
            <h3 class="font-bold mb-2 group-hover:text-primary-600 transition">View Feed</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">See what's happening</p>
        </a>
        
        <a href="/games" class="neu-card p-6 hover:scale-[1.02] transition block group">
            <div class="text-3xl mb-2 group-hover:scale-110 transition">🎮</div>
            <h3 class="font-bold mb-2 group-hover:text-yellow-600 transition">Play Games</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">Fun games & win rewards</p>
        </a>
        <?php else: ?>
        <div class="neu-card p-6 opacity-75">
            <div class="text-3xl mb-2">📝</div>
            <h3 class="font-bold mb-2">Create Posts</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">Login to share thoughts</p>
        </div>
        
        <div class="neu-card p-6 opacity-75">
            <div class="text-3xl mb-2">📱</div>
            <h3 class="font-bold mb-2">View Feed</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">Login to view posts</p>
        </div>
        
        <div class="neu-card p-6 opacity-75">
            <div class="text-3xl mb-2">🤝</div>
            <h3 class="font-bold mb-2">Connect</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">Login to invite friends</p>
        </div>
        <?php endif; ?>
    </div>

    <!-- 🆕 ASP.NET Chat App Integration with 6:4 Image -->
    <div class="neu-card p-0 overflow-hidden border-2 border-indigo-200 dark:border-indigo-800">
        <!-- 6:4 Aspect Ratio Container (66.6667% = 4/6) -->
        <div class="relative w-full" style="padding-bottom: 66.6667%;">
            
            <!-- Background Image -->
            <img src="https://akkuapps.in/assets/images/1.png" 
     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                 alt="AkkuApps Chat Platform" 
                 class="absolute top-0 left-0 w-full h-full object-cover"
                 loading="lazy">
            
            <!-- Gradient Overlay for Text Readability -->
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/80 via-indigo-900/50 to-blue-900/70"></div>
            
            <!-- Content Overlay -->
            <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-between">
                <!-- Top Content -->
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2 drop-shadow-lg">
                            💬 AkkuApps Chat
                        </h2>
                        <p class="text-indigo-100 text-sm md:text-base drop-shadow-md max-w-md">
                            Real-time messaging powered by லியோ இன்ஃபோடெக்
                        </p>
                    </div>
                    <!-- Live Badge -->
                    <span class="px-3 py-1 rounded-lg text-xs font-bold bg-yellow-400 text-yellow-900 shadow-lg animate-pulse">
                        ● LIVE
                    </span>
                </div>
                
                <!-- Bottom Button -->
                <div class="flex justify-end">
                    <a href="https://chatbot.akkuapps.in/" target="_blank" rel="noopener"
                       class="neu-button px-6 py-3 rounded-xl bg-white text-indigo-600 hover:bg-indigo-50 font-semibold text-sm md:text-base flex items-center gap-2 shadow-xl hover:shadow-2xl transition-all transform hover:-translate-y-1">
                        <span>Open Chat App</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
 
<!-- 🖥️ Download Our Applications Section -->
    <div class="neu-card p-6 mb-6 bg-gradient-to-r from-slate-50 to-gray-50 dark:from-slate-900/50 dark:to-gray-900/50 border-2 border-gray-200 dark:border-gray-700">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
            <div>
                <h3 class="font-bold text-xl flex items-center gap-2">
                    💻 Download Our Applications
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    Windows, Utilities, Must Have Apps & More
                </p>
            </div>
            <a href="/downloads" class="neu-button px-6 py-2 rounded-lg bg-gray-800 text-white hover:bg-gray-900 dark:bg-gray-700 dark:hover:bg-gray-600">
                📁 View All Downloads
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Windows Apps -->
            <a href="/downloads/windows" class="group p-4 rounded-xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 hover:border-blue-500 dark:hover:border-blue-400 transition hover:shadow-lg">
                <div class="text-3xl mb-3 group-hover:scale-110 transition">🪟</div>
                <h4 class="font-bold text-gray-900 dark:text-white mb-1">Windows Apps</h4>
                <p class="text-xs text-gray-500">Essential Windows software & tools</p>
                <div class="mt-3 flex items-center text-blue-600 text-sm font-medium">
                    Browse <span class="ml-1 group-hover:translate-x-1 transition">→</span>
                </div>
            </a>

            <!-- Utilities -->
            <a href="/downloads/utilities" class="group p-4 rounded-xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 hover:border-green-500 dark:hover:border-green-400 transition hover:shadow-lg">
                <div class="text-3xl mb-3 group-hover:scale-110 transition">🛠️</div>
                <h4 class="font-bold text-gray-900 dark:text-white mb-1">Utilities</h4>
                <p class="text-xs text-gray-500">System tools & productivity apps</p>
                <div class="mt-3 flex items-center text-green-600 text-sm font-medium">
                    Browse <span class="ml-1 group-hover:translate-x-1 transition">→</span>
                </div>
            </a>

            <!-- Mobile Apps -->
            <a href="/downloads/mobile" class="group p-4 rounded-xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 hover:border-purple-500 dark:hover:border-purple-400 transition hover:shadow-lg">
                <div class="text-3xl mb-3 group-hover:scale-110 transition">📱</div>
                <h4 class="font-bold text-gray-900 dark:text-white mb-1">Mobile Apps</h4>
                <p class="text-xs text-gray-500">Android & iOS applications</p>
                <div class="mt-3 flex items-center text-purple-600 text-sm font-medium">
                    Browse <span class="ml-1 group-hover:translate-x-1 transition">→</span>
                </div>
            </a>

            <!-- Source Code -->
            <a href="/downloads/source/" class="group p-4 rounded-xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 hover:border-amber-500 dark:hover:border-amber-400 transition hover:shadow-lg">
                <div class="text-3xl mb-3 group-hover:scale-110 transition">📦</div>
                <h4 class="font-bold text-gray-900 dark:text-white mb-1">Source Code</h4>
                <p class="text-xs text-gray-500">GitHub repos & code samples</p>
                <div class="mt-3 flex items-center text-amber-600 text-sm font-medium">
                    Browse <span class="ml-1 group-hover:translate-x-1 transition">→</span>
                </div>
            </a>
        </div>

        <!-- Quick Stats for Downloads -->
        <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700 grid md:grid-cols-4 gap-4 text-center">
            <div>
                <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">12</div>
                <div class="text-xs text-gray-500">Windows Apps</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">8</div>
                <div class="text-xs text-gray-500">Utilities</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">5</div>
                <div class="text-xs text-gray-500">Mobile Apps</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">24</div>
                <div class="text-xs text-gray-500">Total Downloads</div>
            </div>
        </div>
    </div>
    
    <!-- 🎮 NEW: Games Hub Promo -->
    <a href="/games" class="neu-card p-6 block group hover:scale-[1.02] transition border-2 border-transparent hover:border-yellow-200 dark:hover:border-yellow-800 bg-gradient-to-r from-yellow-50 to-orange-50 dark:from-yellow-900/20 dark:to-orange-900/20">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="text-5xl">🎮</div>
                <div>
                    <h2 class="text-xl font-bold mb-1 group-hover:text-yellow-600 transition">Games Hub</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Play fun games & earn coins! <?php echo !isLoggedIn() ? '(Login required)' : ''; ?></p>
                    <div class="flex items-center gap-3 mt-2 text-xs text-gray-500 flex-wrap">
                        <span>🐍 Snake</span>
                        <span>🎯 Shooter</span>
                        <span>🎱 Color Crush</span>
                        <span class="text-yellow-600 font-bold">+ Earn 🪙</span>
                    </div>
                </div>
            </div>
            <span class="text-2xl group-hover:translate-x-2 transition">→</span>
        </div>
    </a>
</div>

<?php include 'includes/footer.php'; ?>
