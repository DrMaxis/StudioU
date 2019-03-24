(function () {
  var Terminal;
var currentTime = new Date();
  Terminal = class Terminal {
    constructor() {
      this._init_terminal("terminal");
    }

    _init_terminal(name) {
      var $terminal;
      $terminal = $(`#${name}`);
      return $terminal.terminal({
        hack: (who) => {
          if (who === "me") {
            return $terminal.echo(document.cookie);
          } else {
            return $terminal.echo("unknown user");
          }
        },
        add_effect: (effect) => {
          var term;
          if (effect === "glitch") {
            $("span", $terminal).each((idx, el) => {
              var $el, content;
              $el = $(el);
              content = $el.text();
              $el.attr("data-text", content);
              return $el.addClass("effect-glitch");
            });
          } else {
            $terminal.addClass(`effect-${effect}`);
          }
          return term = false;
        },
        remove_effect: (effect) => {
          var term;
          if (effect === "glitch") {
            $("span", $terminal).each((idx, el) => {
              var $el;
              $el = $(el);
              $el.attr("data-text", "");
              return $el.removeClass("effect-glitch");
            });
          } else {
            $terminal.removeClass(`effect-${effect}`);
          }
          return term = false;
        },


        goto_page: (page) => {
          var term;
          if (page === "projects") {
            window.location.href = "http://stackoverflow.com";
          } else if (page === "contact") {
            window.location.href = "https://google.com";
          } else if (page === "github") {
            window.location.href = "https://github.io";
          } else if (page === "resume") {
            window.location.href = "https://xencolor.com";
          } else {
            return $terminal.echo("unknown page");
          }
        }
      }, {
        
        greetings: 'Logged in as Nathan Antwi, Welcome. ' + currentTime,
        prompt: "@lotus~> ",
        name: `${name}`
      });
    }

  };

  $(function () {
    return new Terminal;
  });

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQSxNQUFBOztFQUFNLFdBQU4sTUFBQSxTQUFBO0lBRUUsV0FBYSxDQUFBLENBQUE7TUFDWCxJQUFDLENBQUEsY0FBRCxDQUFnQixVQUFoQjtJQURXOztJQUdiLGNBQWdCLENBQUMsSUFBRCxDQUFBO0FBQ2QsVUFBQTtNQUFBLFNBQUEsR0FBWSxDQUFBLENBQUUsQ0FBQSxDQUFBLENBQUEsQ0FBSSxJQUFKLENBQUEsQ0FBRjthQUVaLFNBQVMsQ0FBQyxRQUFWLENBQW1CO1FBRWpCLElBQUEsRUFBTSxDQUFDLEdBQUQsQ0FBQSxHQUFBO1VBQ0osSUFBRyxHQUFBLEtBQU8sSUFBVjttQkFDRSxTQUFTLENBQUMsSUFBVixDQUFlLFFBQVEsQ0FBQyxNQUF4QixFQURGO1dBQUEsTUFBQTttQkFHRSxTQUFTLENBQUMsSUFBVixDQUFlLGNBQWYsRUFIRjs7UUFESSxDQUZXO1FBUWpCLFVBQUEsRUFBWSxDQUFDLE1BQUQsQ0FBQSxHQUFBO0FBQ1YsY0FBQTtVQUFBLElBQUcsTUFBQSxLQUFVLFFBQWI7WUFDRSxDQUFBLENBQUUsTUFBRixFQUFVLFNBQVYsQ0FBb0IsQ0FBQyxJQUFyQixDQUEwQixDQUFDLEdBQUQsRUFBTSxFQUFOLENBQUEsR0FBQTtBQUN4QixrQkFBQSxHQUFBLEVBQUE7Y0FBQSxHQUFBLEdBQVUsQ0FBQSxDQUFFLEVBQUY7Y0FDVixPQUFBLEdBQVUsR0FBRyxDQUFDLElBQUosQ0FBQTtjQUNWLEdBQUcsQ0FBQyxJQUFKLENBQVMsV0FBVCxFQUFzQixPQUF0QjtxQkFDQSxHQUFHLENBQUMsUUFBSixDQUFhLGVBQWI7WUFKd0IsQ0FBMUIsRUFERjtXQUFBLE1BQUE7WUFPRSxTQUFTLENBQUMsUUFBVixDQUFtQixDQUFBLE9BQUEsQ0FBQSxDQUFVLE1BQVYsQ0FBQSxDQUFuQixFQVBGOztpQkFTQSxJQUFBLEdBQU87UUFWRyxDQVJLO1FBb0JqQixhQUFBLEVBQWUsQ0FBQyxNQUFELENBQUEsR0FBQTtBQUNiLGNBQUE7VUFBQSxJQUFHLE1BQUEsS0FBVSxRQUFiO1lBQ0UsQ0FBQSxDQUFFLE1BQUYsRUFBVSxTQUFWLENBQW9CLENBQUMsSUFBckIsQ0FBMEIsQ0FBQyxHQUFELEVBQU0sRUFBTixDQUFBLEdBQUE7QUFDeEIsa0JBQUE7Y0FBQSxHQUFBLEdBQU0sQ0FBQSxDQUFFLEVBQUY7Y0FDTixHQUFHLENBQUMsSUFBSixDQUFTLFdBQVQsRUFBc0IsRUFBdEI7cUJBQ0EsR0FBRyxDQUFDLFdBQUosQ0FBZ0IsZUFBaEI7WUFId0IsQ0FBMUIsRUFERjtXQUFBLE1BQUE7WUFNRSxTQUFTLENBQUMsV0FBVixDQUFzQixDQUFBLE9BQUEsQ0FBQSxDQUFVLE1BQVYsQ0FBQSxDQUF0QixFQU5GOztpQkFRQSxJQUFBLEdBQU87UUFUTTtNQXBCRSxDQUFuQixFQStCRztRQUNELE1BQUEsRUFBUSxJQURQO1FBRUQsSUFBQSxFQUFRLENBQUEsQ0FBQSxDQUFHLElBQUgsQ0FBQTtNQUZQLENBL0JIO0lBSGM7O0VBTGxCOztFQTRDQSxDQUFBLENBQUUsUUFBQSxDQUFBLENBQUE7V0FDQSxJQUFJO0VBREosQ0FBRjtBQTVDQSIsInNvdXJjZXNDb250ZW50IjpbImNsYXNzIFRlcm1pbmFsXG4gIFxuICBjb25zdHJ1Y3RvcjogLT5cbiAgICBAX2luaXRfdGVybWluYWwoXCJ0ZXJtaW5hbFwiKVxuXG4gIF9pbml0X3Rlcm1pbmFsOiAobmFtZSkgLT5cbiAgICAkdGVybWluYWwgPSAkKFwiIyN7bmFtZX1cIilcblxuICAgICR0ZXJtaW5hbC50ZXJtaW5hbCh7XG5cbiAgICAgIGhhY2s6ICh3aG8pID0+XG4gICAgICAgIGlmIHdobyA9PSBcIm1lXCJcbiAgICAgICAgICAkdGVybWluYWwuZWNobyhkb2N1bWVudC5jb29raWUpXG4gICAgICAgIGVsc2VcbiAgICAgICAgICAkdGVybWluYWwuZWNobyhcInVua25vd24gdXNlclwiKVxuICAgICAgICAgXG4gICAgICBhZGRfZWZmZWN0OiAoZWZmZWN0KSA9PlxuICAgICAgICBpZiBlZmZlY3QgPT0gXCJnbGl0Y2hcIlxuICAgICAgICAgICQoXCJzcGFuXCIsICR0ZXJtaW5hbCkuZWFjaCAoaWR4LCBlbCkgPT5cbiAgICAgICAgICAgICRlbCAgICAgPSAkKGVsKVxuICAgICAgICAgICAgY29udGVudCA9ICRlbC50ZXh0KClcbiAgICAgICAgICAgICRlbC5hdHRyKFwiZGF0YS10ZXh0XCIsIGNvbnRlbnQpXG4gICAgICAgICAgICAkZWwuYWRkQ2xhc3MoXCJlZmZlY3QtZ2xpdGNoXCIpXG4gICAgICAgIGVsc2VcbiAgICAgICAgICAkdGVybWluYWwuYWRkQ2xhc3MoXCJlZmZlY3QtI3tlZmZlY3R9XCIpXG5cbiAgICAgICAgdGVybSA9IGZhbHNlXG5cbiAgICAgIHJlbW92ZV9lZmZlY3Q6IChlZmZlY3QpID0+XG4gICAgICAgIGlmIGVmZmVjdCA9PSBcImdsaXRjaFwiXG4gICAgICAgICAgJChcInNwYW5cIiwgJHRlcm1pbmFsKS5lYWNoIChpZHgsIGVsKSA9PlxuICAgICAgICAgICAgJGVsID0gJChlbClcbiAgICAgICAgICAgICRlbC5hdHRyKFwiZGF0YS10ZXh0XCIsIFwiXCIpXG4gICAgICAgICAgICAkZWwucmVtb3ZlQ2xhc3MoXCJlZmZlY3QtZ2xpdGNoXCIpXG4gICAgICAgIGVsc2VcbiAgICAgICAgICAkdGVybWluYWwucmVtb3ZlQ2xhc3MoXCJlZmZlY3QtI3tlZmZlY3R9XCIpXG4gICAgICAgICAgXG4gICAgICAgIHRlcm0gPSBmYWxzZVxuXG4gICAgfSwge1xuICAgICAgcHJvbXB0OiBcIj4gXCIsXG4gICAgICBuYW1lOiAgIFwiI3tuYW1lfVwiXG4gICAgfSlcblxuJCAtPlxuICBuZXcgVGVybWluYWwiXX0=
//# sourceURL=coffeescript