<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::statement('ALTER TABLE posts AUTO_INCREMENT = 1');
        DB::table('posts')->insert([
            [
                'slug' => 'post-1',
                'title' => 'The Future of Technology in 2025',
                'author' => 'John Doe',
                'content' => 'The future of technology is often described as unpredictable, yet many experts believe that advancements in artificial intelligence, robotics, and quantum computing will shape the world in 2025. As we move towards a more connected society, the integration of smart technologies into everyday life will become seamless. In this article, we explore how technological innovations will impact industries, daily life, and our social dynamics in the years to come.

                AI is expected to make significant strides in the next few years, allowing for smarter automation in various sectors. From healthcare to finance, artificial intelligence will help improve efficiency, reduce human error, and create more personalized experiences. For example, in healthcare, AI-powered diagnostics could lead to faster and more accurate treatment plans.

                Another area that will likely experience immense growth is robotics. We are already seeing robots perform tasks in warehouses, assembly lines, and even in healthcare settings. By 2025, robots may be able to assist with elderly care, perform surgeries with greater precision, and take on jobs that are considered dangerous for humans.

                In addition, quantum computing holds the potential to revolutionize fields like cryptography, data security, and climate modeling. Unlike traditional computers, quantum computers use quantum bits or qubits, which can perform multiple calculations simultaneously. This could lead to breakthroughs in areas that require vast computational power, such as drug discovery or climate change simulations.

                However, with all these advancements, there are concerns about the societal impacts of these technologies. While automation could bring about economic growth, it might also lead to job displacement. Policymakers and business leaders will need to ensure that the benefits of these technologies are distributed equitably and that workers are prepared for the changes that lie ahead.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'slug' => 'post-2',
                'title' => 'The Importance of Mental Health Awareness',
                'author' => 'Jane Smith',
                'content' => 'Mental health awareness has come a long way over the years, yet there is still much to be done. With the rise of social media, increased stressors in daily life, and the ongoing global pandemic, mental health has never been more critical to our well-being. In this article, we will discuss the importance of raising awareness around mental health and how we can work together to reduce the stigma associated with mental health issues.

                Mental health is just as important as physical health, but unfortunately, it is often neglected. Studies show that mental health problems, such as anxiety and depression, affect millions of people worldwide. Despite the growing recognition of mental health, there is still a significant lack of resources for people who need help. Raising awareness and providing education on mental health can help reduce the stigma that prevents many people from seeking the support they need.

                Social media, while connecting people globally, has also been linked to increasing feelings of isolation and depression, particularly among younger generations. It is essential for social media platforms and influencers to promote positive mental health messages and create a safe space for conversations about mental well-being. In addition, we need to focus on how we can support people dealing with mental health challenges, whether through therapy, community programs, or accessible resources.

                Schools, workplaces, and healthcare systems must all play a role in promoting mental health awareness. Providing employees and students with the tools to manage stress and identify early signs of mental health struggles is crucial. Mental health education should be integrated into curricula, workplace training, and public health initiatives to create a more supportive environment for everyone.

                Ultimately, changing the conversation around mental health is necessary to create a society that values and prioritizes well-being. As we continue to raise awareness and break down barriers, more individuals will feel empowered to seek help, and society as a whole will be better equipped to support those in need.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'slug' => 'post-3',
                'title' => 'Exploring the Wonders of Space Travel',
                'author' => 'Richard Lee',
                'content' => 'Space exploration has fascinated humanity for centuries, but only in recent decades have we begun to unlock the mysteries of the universe. In this article, we will explore the wonders of space travel, its history, and the future possibilities that await us as technology advances.

                The first successful space travel took place in 1961 when Yuri Gagarin, a Russian cosmonaut, became the first human to orbit the Earth. Since then, space travel has evolved significantly. The United States’ Apollo missions took astronauts to the Moon, and the International Space Station (ISS) has become a hub for research and international cooperation in space.

                In the future, space tourism will likely become a booming industry. Companies like SpaceX, Blue Origin, and Virgin Galactic are already working on developing spacecraft that will take civilians to space. This could open up new frontiers for exploration, research, and even commercial endeavors. Imagine booking a vacation to the Moon or staying at a space hotel orbiting Earth.

                Additionally, space missions are vital for scientific research. Understanding how our planet interacts with the cosmos can help us address challenges like climate change and resource depletion. For instance, satellites provide us with invaluable data on weather patterns, environmental changes, and global communications. Without these technologies, our ability to address urgent global issues would be severely limited.

                As we continue to push the boundaries of space travel, one of the biggest challenges we face is ensuring the safety and sustainability of missions. Advances in propulsion, life-support systems, and radiation shielding will be crucial to ensure that humans can travel to distant planets and perhaps even establish colonies on Mars. The possibilities are limitless, and space travel remains one of humanity’s most exciting frontiers.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'slug' => 'post-4',
                'title' => 'The Rise of Electric Vehicles: A Sustainable Future',
                'author' => 'Emily Johnson',
                'content' => 'Electric vehicles (EVs) have gained significant popularity in recent years, and for good reason. As concerns about climate change and the environmental impact of fossil fuels grow, electric vehicles are seen as a crucial step toward creating a more sustainable future. In this article, we will explore the rise of electric vehicles and their potential to revolutionize the transportation industry.

                The first electric vehicle was created in the 19th century, but it wasn’t until the 21st century that they became practical for the average consumer. With improvements in battery technology, EVs have become more affordable and have a longer range. Major automakers like Tesla, Nissan, and Chevrolet have played pivotal roles in making electric cars more mainstream, while governments worldwide have introduced policies and incentives to encourage the adoption of electric vehicles.

                One of the key benefits of electric vehicles is their potential to reduce greenhouse gas emissions. Unlike traditional gasoline-powered vehicles, EVs produce zero emissions during operation, making them a cleaner alternative. As more people switch to electric vehicles, we could see a significant reduction in air pollution, especially in urban areas where traffic congestion contributes to poor air quality.

                Additionally, electric vehicles can help reduce our dependence on fossil fuels, which are finite resources. By transitioning to renewable energy sources like wind and solar power, electric vehicles can operate with a minimal environmental footprint. As battery technology continues to improve, the cost of EVs is expected to drop further, making them accessible to more people around the world.

                Despite the clear benefits, there are still challenges to overcome. The availability of charging infrastructure is one of the most significant barriers to widespread EV adoption. Governments and private companies must invest in charging stations to ensure that EVs can be charged easily and quickly. Furthermore, the environmental impact of battery production and disposal must be addressed to ensure that the shift to electric vehicles is truly sustainable.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'slug' => 'post-5',
                'title' => 'The Art of Cooking: A Guide for Beginners',
                'author' => 'Sophia Taylor',
                'content' => 'Cooking is both an art and a science, and it is a skill that can bring immense satisfaction and joy. For beginners, however, the idea of cooking might seem daunting. In this article, we will explore some tips and tricks for those who are new to the kitchen and want to learn the basics of cooking.

                First, it is essential to understand that cooking doesn’t have to be complicated. Start with simple recipes that require only a few ingredients. A basic vegetable stir-fry or a pasta dish can be a great starting point for beginners. As you gain confidence, you can gradually experiment with more complex recipes and techniques.

                One of the most important aspects of cooking is understanding flavors and how they interact. For example, knowing when to add salt, pepper, and herbs can elevate a dish and make it more delicious. Don’t be afraid to experiment with different seasonings and spices to find your personal flavor profile.

                Another tip for beginners is to invest in a few quality kitchen tools. A good knife, cutting board, and a set of pots and pans can make a significant difference in your cooking experience. While it’s possible to cook with basic tools, having the right equipment can make tasks easier and more enjoyable.

                Finally, don’t be afraid to make mistakes. Cooking is a learning process, and it’s okay to burn a dish or make a mess. The more you practice, the better you will become. So put on your apron, turn on the stove, and enjoy the journey of learning to cook delicious meals.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
