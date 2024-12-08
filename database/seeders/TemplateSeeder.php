<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            [
                'name' => 'Blog Title',
                'desc' => 'An AI tool that generate blog title depends on your blog information',
                'category' => 'Blog',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/4186/4186534.png',
                'aiPrompt' => 'Give me 5 blog topic idea in bullet wise only based on give niche & outline and give me result in Rich text editor format',
                'slug' => 'generate-blog-title',
                'form' => json_encode([
                    [
                        'label' => 'Enter your blog niche',
                        'field' => 'input',
                        'name' => 'niche',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Blog Content',
                'desc' => 'An AI tool that serves as your personal blog post title writer, generating catchy and viral-worthy titles in your chosen language.',
                'category' => 'blog',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/4905/4905454.png',
                'slug' => 'blog-content-generation',
                'aiPrompt' => 'Generate Blog Content based on topic and outline in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Enter your blog topic',
                        'field' => 'input',
                        'name' => 'topic',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Blog Topic Ideas',
                'desc' => 'An AI tool that serves as your personal blog post title writer, generating catchy and viral-worthy titles in your chosen language.',
                'category' => 'Blog',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/11497/11497847.png',
                'slug' => 'blog-topic-idea',
                'aiPrompt' => 'Generate top 5 Blog Topic Ideas in bullet point only, (no Description) based on niche in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Enter your Niche',
                        'field' => 'input',
                        'name' => 'niche',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Youtube SEO Title',
                'desc' => 'An AI tool that serves as your personal blog post title writer, generating catchy and viral-worthy titles in your chosen language.',
                'category' => 'Youtube Tools',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/402/402075.png',
                'slug' => 'youtube-seo-title',
                'aiPrompt' => 'Give me Best SEO optimized high ranked 5 title ideas bullet wise only bases on keywords and outline and give me result in HTML tags format',
                'form' => json_encode([
                    [
                        'label' => 'Enter your youtube video topic keywords',
                        'field' => 'input',
                        'name' => 'keywords',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Youtube Description',
                'desc' => 'An AI tool that serves as your personal blog post title writer, generating catchy and viral-worthy titles in your chosen language.',
                'category' => 'Youtube Tool',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2111/2111748.png',
                'slug' => 'youtube-description',
                'aiPrompt' => 'Generate Youtube description with emoji under 4-5 lines based on topic and outline in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Enter your blog topic/title',
                        'field' => 'input',
                        'name' => 'topic',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Youtube Tags',
                'desc' => 'An AI tool that serves as your personal blog post title writer, generating catchy and viral-worthy titles in your chosen language.',
                'category' => 'Youtube Tool',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/4674/4674918.png',
                'slug' => 'youtube-tag',
                'aiPrompt' => 'Generate 10 Youtube tags in bullet point based on title and outline in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Enter your youtube title',
                        'field' => 'input',
                        'name' => 'title',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Rewrite Article (Plagiarism Free)',
                'desc' => 'Use this tool to rewrite existing Article or Blog Post which can bypass AI detectors and also make it plagiarism free.',
                'category' => 'Rewriting Tool',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/3131/3131607.png',
                'slug' => 'rewrite-article',
                'aiPrompt' => 'Rewrite give article without any Plagiarism in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => '🤖 Provide your Article/Blogpost or any other content to rewrite.',
                        'field' => 'input',
                        'name' => 'article',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Text Improver',
                'desc' => 'This handy tool refines your writing, eliminating errors and redundancies for a clear, readable result. It also offers a comprehensive tone analysis and suggests better word choices.',
                'category' => 'Writing Assistant',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/1686/1686815.png',
                'slug' => 'text-improver',
                'aiPrompt' => 'Given textToImprove, Rewrite text without any grammar mistake and professionally in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Enter text that you want to re-write or improve',
                        'field' => 'input',
                        'name' => 'textToImprove',
                    ]
                ]),
            ],
            [
                'name' => 'Add Emojis to Text',
                'desc' => 'An AI tool that serves as your personal blog post title writer, generating catchy and viral-worthy titles in your chosen language.',
                'category' => 'blog',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2584/2584606.png',
                'slug' => 'add-emoji-to-text',
                'aiPrompt' => 'Add Emoji to outline text depends on outline and rewrite it in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Enter your text to add emojis',
                        'field' => 'input',
                        'name' => 'outline',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Instagram Post Generator',
                'desc' => 'An AI tool that serves as your personal blog post title writer, generating catchy and viral-worthy titles in your chosen language.',
                'category' => 'blog',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/15713/15713420.png',
                'slug' => 'instagram-post-generator',
                'aiPrompt' => 'Generate 3 Instagram post depends on a given keywords and give output in  in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Enter Keywords for your post',
                        'field' => 'input',
                        'name' => 'keywords',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Instagram Hash Tag Generator',
                'desc' => 'An AI tool that serves as your personal blog post title writer, generating catchy and viral-worthy titles in your chosen language.',
                'category' => 'blog',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/7045/7045432.png',
                'slug' => 'instagram-hash-tag-generator',
                'aiPrompt' => 'Generate 15 Instagram hash tag depends on a given keywords and give output in  in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Enter Keywords for your instagram hashtag',
                        'field' => 'input',
                        'name' => 'keywords',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Instagram Post/Reel Idea',
                'desc' => 'An AI tool that generate New and trending Instagram idea depends on your niche',
                'category' => 'instagram',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/1029/1029183.png',
                'slug' => 'instagram-post-idea-generator',
                'aiPrompt' => 'Generate 5-10 Instagram idea depends on niche with latest trend and give output in  in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Enter Keywords / Niche for your Instagram idea',
                        'field' => 'input',
                        'name' => 'keywords',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'English Grammar Check',
                'desc' => 'AI Model to Correct your English grammar by providing the text',
                'category' => 'english',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/12596/12596700.png',
                'slug' => 'english-grammar-checker',
                'aiPrompt' => 'Rewrite the inputText by correcting the grammar and give output in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Enter text to correct the grammar',
                        'field' => 'input',
                        'name' => 'inputText',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Write Code',
                'desc' => 'AI Model to generate programming code in any language',
                'category' => 'Coding',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/6062/6062646.png',
                'slug' => 'write-code',
                'aiPrompt' => 'Depends on user codeDescription write a code and give output in rich text editor format in code block',
                'form' => json_encode([
                    [
                        'label' => 'Enter description of code you want along with Programming Lang',
                        'field' => 'input',
                        'name' => 'codeDescription',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Explain Code',
                'desc' => 'AI Model to explain programming code in any language',
                'category' => 'Coding',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/8488/8488751.png',
                'slug' => 'explain-code',
                'aiPrompt' => 'Depends on user codeDescription explain code line by line and give output in rich text editor format in code block',
                'form' => json_encode([
                    [
                        'label' => 'Enter code which you want to understand',
                        'field' => 'input',
                        'name' => 'codeDescription',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Code Bug Detector',
                'desc' => 'This tool analyzes your input, like error messages and code snippets, to pinpoint and fix bugs, offering detailed solutions and alternatives in a straightforward, user-friendly way.',
                'category' => 'code-bug-detector',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/4426/4426267.png',
                'slug' => 'code-bug-detector',
                'aiPrompt' => 'Depends on user codeInput find bug in code and give solution and give output in rich text editor format in code block',
                'form' => json_encode([
                    [
                        'label' => 'Enter code which you want to test bug',
                        'field' => 'input',
                        'name' => 'codeInput',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Tagline Generator',
                'desc' => 'Struggling to find the perfect tagline for your brand? Let our AI-tool assist you in creating a tagline that stands out.',
                'category' => 'Marketing',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2178/2178616.png',
                'slug' => 'tagline-generator',
                'aiPrompt' => 'Depends on user productName and outline generate catchy 5-10 tagline for the business product and give output in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Product/Brand Name',
                        'field' => 'input',
                        'name' => 'productName',
                        'required' => true,
                    ]
                ]),
            ],
            [
                'name' => 'Product Description',
                'desc' => 'This is your AI-powered SEO expert, creating captivating and keyword-rich e-commerce product descriptions to boost your online sales.',
                'category' => 'Marketing',
                'icon' => 'https://cdn-icons-png.flaticon.com/128/679/679922.png',
                'slug' => 'product-description',
                'aiPrompt' => 'Depends on user productName and description generate small description for product for e-commer business give output in rich text editor format',
                'form' => json_encode([
                    [
                        'label' => 'Product Name',
                        'field' => 'input',
                        'name' => 'productName',
                        'required' => true,
                    ]
                ]),
            ],
            
        ];

        DB::table('templates')->insert($templates);
    }
}
