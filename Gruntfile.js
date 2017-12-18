module.exports = function (grunt) {
    grunt.initConfig({
        watch: {
            files: './scss/*.scss',
            tasks: ['sass']
        },
        sass: {
            dev: {
                files: {
                    './css/creative.css': './scss/creative.scss'
                }
            }
        },
        browserSync: {

            dev: {
                bsFiles: {
                    src : [
                        './css/creative.css'

                    ]
                },
                options: {
                    proxy: "localhost/joelwinter/wordpress",
                    watchTask: true,
                },
            }
        }
    });

    // load npm tasks
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    // define default task
    grunt.registerTask('default', ['browserSync', 'watch']);
};